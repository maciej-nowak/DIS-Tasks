<?php

	ini_set('session.gc_maxlifetime',60); 
	session_start();
	
	if (!$_SERVER['HTTPS']) 
	{
		header('Location: https://localhost/authentication/login.php');
	}
	if (!isset($_SESSION['login']))
	{
		if (isset($_POST['loginButton']))
		{
			$database = mysqli_connect('localhost', 'root', '', 'pisidatabase');
	
			//pobieranie danych logowania
			$login = $_POST['loginBox'];
			$password = $_POST['passwordBox'];
			
			if (!empty($login) && !empty($password))
			{
				//wyszukiwanie loginu i hasla w bazie
				$query = "SELECT login FROM user WHERE login = " . "'$login' AND password = SHA('$password')";
				$data = mysqli_query($database, $query);
	
				if (mysqli_num_rows($data) == 1)
				{
					$row = mysqli_fetch_array($data);
					$_SESSION['login'] = $row['login'];
					header('Location: index.php'); 
				}	
				else
				{
					echo '<p>Podaj poprawny login i haslo</p>';
				}
			}
			else
			{
				echo '<p>Wprowadz login i hasło, aby uzyskać dostęp</p>';
			}
		}
	}
?>

<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<title>Projektowanie Internetowych Systemów Informacyjnych - Mechanizm Logowania i Uwierzytelniania</title>
</head>
<body>

<?php
	if (empty($_SESSION['login']))
	{
		echo '<p>Wpisz ponizej dane logowania</p>';
?>

	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
		<label for="loginLabel">Login: </label>
		<input type="text" id="loginBox" name="loginBox" /><br/><br/>
		<label for="passwordLabel">Hasło: </label>
		<input type="text" id="passwordBox" name="passwordBox" /><br/><br/>
		<input type="submit" value="ZALOGUJ" name="loginButton" />
	</form>
	
<?php
	}
	else
	{
		echo '<p>Zalogowany użytkownik: ' . $_SESSION['login'] . '.</p>';
	}
?>
		
	
</body>
</html>

