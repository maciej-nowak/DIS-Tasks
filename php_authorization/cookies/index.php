<?php

?>

<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<title>Projektowanie Internetowych Systemów Informacyjnych - Mechanizm Logowania i Uwierzytelniania</title>
</head>
<body>
	<h2><font color="blue">Projektowanie Internetowych Systemów Informacyjnych - Mechanizm Logowania i Uwierzytelniania</font></h2>
	<h4>Autor: Maciej Nowak</h4>
	
<?php
	
	if (isset($_COOKIE['login']))
	{
		echo '<p>Zalogowany użytkownik: ' . $_COOKIE['login'] . '.</p>';
		echo '<p><a href="logout.php">Wyloguj się</a></p>';
	}
	else
	{
		echo '<p>Witaj na stronie głównej projektu. Aby poznać działanie aplikacji, 
		zaloguj się. Jeśli nie posiadasz konta, zarejestruj się lub użyj przykładowych danych logowania<br/>
		login: madjer<br/>haslo: madjer</p><br/><br/>
		<p><a href="login.php">Zaloguj się</a></p> 
		<p><a href="register.php">Zarejestruj się</a></p> ';
	}

?>
	
	
	
</body>
</html>

