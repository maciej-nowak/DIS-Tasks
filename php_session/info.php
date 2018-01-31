<?php
	ini_set('session.gc_maxlifetime',60); //INICJALIZACJA SESJI ORAZ USTAWIENIE CZASU 
	session_start();
	
	if(!isset($_SESSION['Start'])) $_SESSION['Start'] = time(); //JESLI NIE ISTNIEJA ZMIENNE START I KONIEC SESJI TO JE UTWORZ I WYZNACZ NOWA SESJE 
	if(!isset($_SESSION['Koniec'])) $_SESSION['Koniec'] = $_SESSION['Start'] + 60;
	
	if (!isset($_SESSION['WszystkieSesje']))  //JESLI LICZNIK DLA WSZYSTKICH SESJI NIE ISTNIEJE TO WCZYTAJ GO Z PLIKU I POWIEKSZ O 1
	{
		$licznik = file_get_contents('counter.txt');
		$licznik++;
		file_put_contents('counter.txt', $licznik);
		$_SESSION['WszystkieSesje'] = $licznik;
	}
		
	if (!isset($_SESSION['WyswietleniaWSesji'])) //JESLI LICZNIK WYSWIETLEN STRONY W SESJI NIE ISTNIEJE, UTWORZ GO I USTAW MU WARTOSC 1 
	{
		$_SESSION['WyswietleniaWSesji'] = 1;
	}
	else $_SESSION['WyswietleniaWSesji']++;  //W PRZECIWNYM RAZIE ZWIEKSZ GO
	
	//LICZNIK AKTYWNYCH SESJI, UTWORZ GO I PRZYPISZ MU LICZBE PLIKOW W KATALOGU SESJI
		$katalog = session_save_path(); //DOMYSLNIE W PHP.INI: 'C:\xampp\tmp' W PRZECIWNYM RAZIE NALEZY USTAWIC ODPOWIEDNIA SCIEZKE 
		$ile = count(glob($katalog . '/*'));
		$_SESSION['AktywneSesje'] = $ile;
	
	if(time() >  $_SESSION['Koniec'])  //JESLI CZAS OBECNY JEST WIEKSZY OD KONCA SESJI TO SESJA SIE SKONCZYLA WIEC USUN SESJE I POZOSTAN W INFO.PHP
	{
		$_SESSION = array();
		session_destroy();
		header('Location: info.php');
		exit;
	}
	
	if (isset($_POST['FinishSession'])) //W MOMENCIE WCISNIECIA PRZYCISKU KONCA SESJI, USUN SESJE I PRZEJDZ DO FINISH.PHP DLA POTWIERDZENIA
	{
		$_SESSION = array();
		session_destroy();
		header('Location: finish.php');
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

<p>Nazywasz się: <?php echo @$_SESSION['Imie'] . ' ' . @$_SESSION['Nazwisko']; ?></p><br/><br/>
<p><b>Statystyki strony: </b></p>
<p>Ilość wizyt: <?php echo @file_get_contents('counter.txt'); ?></p>
<p>Ilość aktywnych użytkowników: <?php echo @$_SESSION['AktywneSesje']; ?></p>
<p>Ilość wyświetleń strony INFO w bieżącej sesji: <?php echo @$_SESSION['WyswietleniaWSesji']; ?></p>

<form method="post">
<input type="button" value="WSTECZ" name="BackButton" onclick="window.location.href='index.php'" >
<input type="submit" value="ZAKOŃCZ SESJE" name="FinishSession" >
<input type="button" value="ODŚWIEŻ" name="RefreshButton" onclick="window.location.href='info.php'" >
</form>
	
</body>
</html>