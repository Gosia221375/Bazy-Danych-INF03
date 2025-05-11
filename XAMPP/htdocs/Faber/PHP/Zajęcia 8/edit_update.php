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
		

			//zmienne przechwycone
			$id=$_POST["id"];
			$imie=$_POST["imie"];
			$nazw=$_POST["nazw"];
			$dataur=$_POST["dataur"];
			$miasto=$_POST["miasto"];
		
			echo("id=$id");
		
			$id_pol=mysqli_connect($url,$identyfikator,$haslo,$baza_danych) or die("</br>BŁĄD POŁĄCZENIA Z BAZĄ ".$baza_danych);

			$zapytanie="update $tabela set 
						Imie='$imie',
						Nazwisko='$nazw',
						DataUr='$dataur',
						Miasto='$miasto'
						where Id='$id'";
			
			mysqli_query($id_pol,$zapytanie) 
			or die("<b>Błąd aktualizacji rekordu. </b></br>
					Sprawdź istnienie rekordu</br>
					Zapytanie:</b></br>".$zapytanie);
			
			echo("</br>Rekord został zaktualizowany");
			
			mysqli_close($id_pol);
			

	?>
	
</body>
</html>