//UPDATE 'kandydaci' SET 'glosy' = '$glosy' WHERE 'kandydaci'.'Nazwisko' = $nazw;

<html>
<head>
	<title>Obsługa SQL</title>
	<meta charset="UTF-8">
</head>
<body>
	<h3>Dodawanie rekordów do tabeli:</br></h3>
	<form action="update.php" method="POST">
		<table border="1" align="center">
			<tr bgcolor="#FF9999">
				<th width="150">Nazwisko</th>
				<th width="100">Głosy</th>
			</tr>
			<tr>
				<td>
					<input type="text" name="nazw" width="100%">
				</td>
				<td>
					<input type="text" name="glosy" width="100%">
				</td>
			</tr>
		</table>
		</br>
		<center>
		<input type="reset" value="REZYGNACJA">
		<input type="submit" value="DODAJ REKORD">
		</center>
	</form>
	
	<?php
		$url = 'localhost';
		$identyfikator = 'root';
		$haslo = '';
		$baza_danych='wybory';
		$tabela='kandydaci';
		
		if (isset($_POST["nazw"]))
		{
		
			//zmienne przechwycone
			$nazw=$_POST["nazw"];
			$glosy=$_POST["glosy"];
		
			$id_pol=mysqli_connect($url,$identyfikator,$haslo,$baza_danych) or die("</br>BŁĄD POŁĄCZENIA Z BAZĄ ".$baza_danych);

			$zapytanie="UPDATE kandydaci SET glosy = $glosy WHERE kandydaci.Nazwisko = \"$nazw\";";
			
			mysqli_query($id_pol,$zapytanie) or die("<b>Błąd dodawania rekordu. Zapytanie:</b></br>".$zapytanie);
			echo("</br>Rekord został utworzona");

			mysqli_close($id_pol);
			
		}
	?>
	
</body>
</html>