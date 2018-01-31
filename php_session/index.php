<?php
	ini_set('session.gc_maxlifetime',60);	//INICJALIZACJA SESJI ORAZ USTAWIENIE CZASU 
	session_start();
	
	if(!isset($_SESSION['Start'])) $_SESSION['Start'] = time(); //JESLI NIE ISTNIEJA ZMIENNE START I KONIEC SESJI TO JE UTWORZ I WYZNACZ NOWA SESJE 
	if(!isset($_SESSION['Koniec'])) $_SESSION['Koniec'] = $_SESSION['Start'] + 60;
	if (!isset($_SESSION['WyswietleniaWSesji'])) $_SESSION['WyswietleniaWSesji'] = 0; //JESLI LICZNIK WYSWIETLEN STRONY W SESJI NIE ISTNIEJE, UTWORZ GO I USTAW MU WARTOSC 0, BO LICZYMY ILOSC WYSWIETLEN TYLKO STRONY INFO
	
	if (!isset($_SESSION['WszystkieSesje']))  //JESLI LICZNIK DLA WSZYSTKICH SESJI NIE ISTNIEJE TO WCZYTAJ GO Z PLIKU I POWIEKSZ O 1
	{
		$licznik = file_get_contents('counter.txt');
		$licznik++;
		file_put_contents('counter.txt', $licznik);
		$_SESSION['WszystkieSesje'] = $licznik;
	}
		
	if(time() >  $_SESSION['Koniec'])  //JESLI CZAS OBECNY JEST WIEKSZY OD KONCA SESJI TO SESJA SIE SKONCZYLA WIEC USUN SESJE I POZOSTAN W INFO.PHP
	{
		$_SESSION = array();
		session_destroy();
		header('Location: info.php');
		exit;
	}
	
	if (isset($_POST['NextButton'])) //PO WCISNIECIU PRZYCISKU DALEJ PRZEKAZ ZAWARTOSC ZMIENNYCH SESYJNYCH I PRZEJDZ DO INFO.PHP
	{
		$_SESSION['Imie'] = $_POST['NameTextBox'];
		$_SESSION['Nazwisko'] = $_POST['SurnameTextBox'];
		$_SESSION['Start'];
		$_SESSION['Koniec'];
		$_SESSION['WszystkieSesje'];
		$_SESSION['WyswietleniaWSesji'];
			header('Location: info.php');
			exit;
	}
?>

<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<title>Projektowanie Internetowych Systemów Informacyjnych - Mechanizm Sesji</title>
</head>
<body>
	<h2><font color="blue">Projektowanie Internetowych Systemów Informacyjnych - Mechanizm Sesji</font></h2>
	<h4>Autor: Maciej Nowak</h4>
	
	<p>Witaj na stronie głównej projektu. Aby poznać działanie aplikacji, 
	wpisz swoje imię i nazwisko oraz wciśnij przycisk DALEJ. Zostaniesz przeniesiony do okna w 
	którym ujrzysz liczniki aplikacji oraz sprawdzisz działanie zmiennych sesyjnych. Czas sesji: 60sek</p><br/><br/>
	
	<form method="post" action="" >
		<label for="NameLabel">Imię: </label>
		<input type="text" id="NameTextBox" name="NameTextBox" /><br/><br/>
		<label for="SurnameLabel">Nazwisko: </label>
		<input type="text" id="SurnameTextBox" name="SurnameTextBox" /><br/><br/>
		<input type="submit" value="DALEJ" name="NextButton" />
	</form>
	
</body>
</html>

