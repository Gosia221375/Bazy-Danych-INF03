<html>
<head>
	<title>Obsługa SQL</title>
	<meta charset="UTF-8">
</head>
<body>
	<?php
		@$url = 'localhost';
		$identyfikator = 'root';
		$haslo = '';
		$baza_danych='wybory';
		$tabela='kandydaci';
		
		$id_pol=mysqli_connect($url,$identyfikator,$haslo,$baza_danych) or die("</br>BŁĄD POŁĄCZENIA Z BAZĄ ".$baza_danych);

		$zapytanie="create table ".$tabela."(
			Id int(5) not null auto_increment primary key,
			Nazwisko varchar(40) not null,
			Glosy int
		)";
		
		mysqli_query($id_pol,$zapytanie) or die("<b>Błąd wykonania zapytania:</b></br>".$zapytanie);
		echo("</br>Tabela ".$tabela." została utworzona");

		mysqli_close($id_pol);
	?>

</body>
</html>