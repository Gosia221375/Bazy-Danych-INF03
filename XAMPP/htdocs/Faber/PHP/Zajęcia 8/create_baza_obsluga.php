<html>
<head>
	<title>Obsługa SQL</title>
	<meta charset="UTF-8">
</head>
<body>
	<?php
		$url = $_POST["url"];
		$identyfikator = $_POST["login"];
		$haslo = $_POST["pass"];
		$baza_danych=$_POST["nazwabazy"];
		
		/* 	TO JEST TEŻ OK
		$id_pol=mysqli_connect($url,$identyfikator,$haslo);
		if($id_pol==false){
			echo("BŁĄD POŁACZENIA");
			exit;
		}
		*/
		
		$id_pol=mysqli_connect($url,$identyfikator,$haslo) or die("</br>BŁĄD POŁĄCZENIA");
		echo("</br>POŁACZYLIŚMY SIĘ Z BAZĄ");
		
		$zapytanie="create database ".$baza_danych;
		mysqli_query($id_pol,$zapytanie) or die("</br>BŁĄD TWORZENIA BAZY ".$baza_danych);
		echo("</br>UTWORZONO BAZĘ ".$baza_danych);
		

		mysqli_close($id_pol);
	?>

</body>
</html>