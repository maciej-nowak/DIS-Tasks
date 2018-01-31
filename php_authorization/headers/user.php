<?php
	require_once('authorized.php');
	
		
	$database = mysqli_connect('localhost', 'root', 'pisi123', 'pisidatabase');
	
	//pobieranie danych logowania
	$login = mysqli_real_escape_string($database, trim($_SERVER['PHP_AUTH_USER']));
	$password = mysqli_real_escape_string($database, trim($_SERVER['PHP_AUTH_PW']));
	
	//wyszukiwanie loginu i hasla w bazie
	$query = "SELECT login FROM user WHERE login = '$login' AND password = SHA('$password')";
	$data = mysqli_query($database, $query);
	
	if (mysqli_num_rows($data) == 1)
	{
		$row = mysqli_fetch_array($data);
		$login = $row['login'];
	}
	
	else
	{
		header('HTTP/1.1 401 Unauthorized');
		header('WWW-Authenticate: Basic realm="Projektowanie Internetowych Systemów Informacyjnych - Mechanizm Logowania i Uwierzytelniania"');
		exit('<p>Wprowadz login i hasło, aby uzyskać dostęp</p>');
	}
	
	echo('<p>Zalogowanych użytkownik: ' . $login . '.</p>');
?>

<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<title>Projektowanie Internetowych Systemów Informacyjnych - Mechanizm Logowania i Uwierzytelniania</title>
</head>
<body>
	
</body>
</html>

