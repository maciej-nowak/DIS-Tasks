<?php
	ini_set('session.gc_maxlifetime',60);	//INICJALIZACJA SESJI ORAZ USTAWIENIE CZASU 
	session_start();
	
	$username = 'rock';
	$password = 'roll';
	
	if(!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW']))
	{
		header('HTTP/1.1 401 Unauthorized');
		header('WWW-Authenticate: Basic realm="Projektowanie Internetowych Systemów Informacyjnych - Mechanizm Logowania i Uwierzytelniania"');
		exit('<p>Wprowadz login i hasło, aby uzyskać dostęp</p>');
	}

?>