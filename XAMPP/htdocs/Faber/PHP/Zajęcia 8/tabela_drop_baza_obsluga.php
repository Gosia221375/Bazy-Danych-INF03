<html>
<head>
	<title>Obsługa SQL</title>
	<meta charset="UTF-8">
</head>
<body>
	<?php
		$url = 'localhost';
		$identyfikator = 'root';
		$haslo = '';
		$baza_danych='4ti_php01';
		$tabela='Uczniowie';
		
		$id_pol=mysqli_connect($url,$identyfikator,$haslo,$baza_danych) or die("</br>BŁĄD POŁĄCZENIA Z BAZĄ ".$baza_danych);

		$zapytanie="drop table ".$tabela;
		
		mysqli_query($id_pol,$zapytanie) or die("<b>Błąd wykonania zapytania:</b></br>".$zapytanie);
		echo("</br>Tabela ".$tabela." została usunięta");

		mysqli_close($id_pol);
	?>

</body>
</html>