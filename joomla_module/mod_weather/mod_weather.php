<?php
?>

<!doctype html>
<html>
<head>
	<title>mod_weather</title>
	<meta http-equiv = "Content-type" content = "text/html"; charset=utf-8">
</head>

<body>

	<form method = "post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
		<label>Miasto: </label>
		<input name = 'city' type = 'text'>
		</br>
		<label>Jednostka: </label>
		</br>
		<label>Celsjusz: </label>
		<input type='radio' name='jednostka' value='C' checked>
		</br>
		<label>Kelwin: </label>
		<input type='radio' name='jednostka' value='K'>
		</br>
		<input type='submit' value='SPRAWDZ'>
	</form>
</body>
</html>



<?php
	
	if (isset($_POST['city']))
	{
	$url_xml = "http://api.openweathermap.org/data/2.5/weather?q=CITY&mode=xml";
	$url_xml = str_replace("CITY", $_POST['city'], $url_xml);
	
	$data_xml = simplexml_load_file($url_xml);
	$jednostka = $_POST['jednostka'];
	
	if($jednostka == "K")
	{
		foreach($data_xml->temperature as $data)
		{
			echo "Temperatura: " . $data['value'] . "K</br>";
			echo "Temperatura minimnalna: " . $data['min'] . "K</br>";
			echo "Temperatura maxymalna: " . $data['max'] . "K</br>";
		}
	}
	if($jednostka == "C")
	{
		foreach($data_xml->temperature as $data)
		{ 
			$zmienna = $data['value'];
			echo "Temperatura: " . ($zmienna - 273.16) . "C</br>";
			$zmienna2 = $data['min'];
			echo "Temperatura minimnalna: " . ($zmienna2 - 273.16) . "C</br>";
			$zmienna3 = $data['max'];
			echo "Temperatura maxymalna: " . ($zmienna3 - 273.16) . "C</br>";
		}
	}
	
	foreach($data_xml->humidity as $data)
	{
		echo "Wilgotnosc: " . $data['value'] . "%</br>";
	}
	
	foreach($data_xml->pressure as $data)
	{
		echo "Cisnienie: " . $data['value'] . "hPa</br>";
	}
	
	foreach($data_xml->wind as $data)
	{
		foreach($data->speed as $data2)
		{
			echo "Predkosc wiatru: " . $data2['value'] . "</br>";
			echo "Nazwa wiatru: " . $data2['name'] . "</br>";
		}
		
		foreach($data->direction as $data3)
		{
			echo "Kierunek wiatru: " . $data3['name'] . "</br>";
		}
	}
	
	foreach($data_xml->clouds as $data)
	{
		echo "Zachmurzenie: " . $data['value'] . "%</br>";
		echo "Typ chmur: " . $data['name'] . "</br>";
	}
	
	foreach($data_xml->lastupdate as $data)
	{
		echo "Ostatnia aktualizacja: " . $data['value'] . "</br>";
	}
	}
?>