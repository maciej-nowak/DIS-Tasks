<?php

	if (isset($_POST['registerButton']))
	{
		$login = $_POST['loginBox'];
		$password = $_POST['passwordBox'];
		$firstname = $_POST['firstNameBox'];
		$lastname = $_POST['lastNameBox'];
		$temp = false;
			
		if (!empty($login) && !empty($password))
		{
			$database = mysqli_connect('localhost', 'root', 'pisi123', 'pisidatabase');
			$query = "INSERT INTO user VALUES('$login', SHA('$password'), '$firstname', '$lastname')";
			mysqli_query($database, $query);
			
			echo '<p>Zostałes poprawnie zarejestrowany</p>';
			echo '<p>Aby się zalogować, użyj swojego konta</p>';
			echo '<br/><p><a href="index.php">Powrót do strony głównej</a></p>';
			
			$login = "";
			$password = "";
			$firstname = "";
			$lastname = "";
			mysqli_close($database);
			$temp = false;
		}
		
		else
		{
			$temp = true;
			echo '<p>Pole login oraz password nie mogą być puste. Wpisz poprawnie informacje</p>';
		}
	}
	
	else
	{
		$temp = true;
	}

	if ($temp)
	{
?>

<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<title>Projektowanie Internetowych Systemów Informacyjnych - Mechanizm Logowania i Uwierzytelniania</title>
</head>
<body>

	<p>Aby się zarejestrować, wpisz dane poniżej i potwierdź je przyciskiem ZAREJESTRUJ.</p><br/><br/>
			
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<label for="loginLabel">Login: </label>
		<input type="text" id="loginBox" name="loginBox" /><br/><br/>
		<label for="passwordLabel">Hasło: </label>
		<input type="text" id="passwordBox" name="passwordBox" /><br/><br/>
		<label for="firstNameLabel">Imię: </label>
		<input type="text" id="firstNameBox" name="firstNameBox" /><br/><br/>
		<label for="lastNameLabel">Nazwisko: </label>
		<input type="text" id="lastNameBox" name="lastNameBox" /><br/><br/>
		<input type="submit" value="ZAREJESTRUJ" name="registerButton" />
	</form>
<?php
	}
?>
</body>
</html>

