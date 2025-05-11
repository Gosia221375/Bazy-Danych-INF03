<html>
<head>
	<title>Obsługa SQL</title>
	<meta charset="UTF-8">
</head>
<body>
	<h3>Usuwanie pojedynczego rekordu:</br></h3>
	<form action="delete.php" method="POST">
		Podaj ID osoby do usunięcia:
		<center>
		<input type="text" name="ID">
		<input type="reset" value="REZYGNACJA">
		<input type="submit" value="USUŃ REKORD">
		</center>
	</form>
	
	<?php
		$url = 'localhost';
		$identyfikator = 'root';
		$haslo = '';
		$baza_danych='4ti_php01';
		$tabela='Uczniowie';
		
		if (isset($_POST["ID"]))
		{
		
			//zmienne przechwycone
			$ID=$_POST["ID"];
		
			$id_pol=mysqli_connect($url,$identyfikator,$haslo,$baza_danych) or die("</br>BŁĄD POŁĄCZENIA Z BAZĄ ".$baza_danych);

			$zapytanie="delete from $tabela where Id=$ID";
			
			mysqli_query($id_pol,$zapytanie) 
			or die("<b>Błąd usuwania rekordu. </b></br>
					Sprawdź istnienie rekordu</br>
					Zapytanie:</b></br>".$zapytanie);
			
			echo("</br>Rekord zostań usunięty");
			echo("</br>$zapytanie");
			
			mysqli_close($id_pol);
			
		}
	?>
	
</body>
</html>