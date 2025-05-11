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
		$id=$_POST['ID'];
		
		$id_pol=mysqli_connect($url,$identyfikator,$haslo,$baza_danych) or die("</br>BŁĄD POŁĄCZENIA Z BAZĄ ".$baza_danych);

		$zapytanie="select * from $tabela where Id=$id";
		
		$wynik=mysqli_query($id_pol,$zapytanie) or die("<b>Nie znaleziono pozycji o podanym ID:</b></br>".$zapytanie);		
		
		$row = mysqli_fetch_array($wynik);
		if (count($row)==0){
			echo("Nie znaleziono pozycji o ID=$id");
			mysqli_close($id_pol);
			exit;
		}
		
		//echo("OK!!!</br>");
	?>
	
	<form action="edit_update.php" method="POST">
		<table border="1" align="center">
			<tr bgcolor="#5F9EA0">
				<th width="50">ID</th>
				<th width="150">Imię</th>
				<th width="150">Nazwisko</th>
				<th width="100">Data ur.</th>
				<th width="150">Miasto</th>
			</tr>
			<tr>
				<td>
					<?php echo($row['Id']) ?>
					<input type="hidden" name="id"  value="<?php echo($row['Id']) ?>" width="100%">
				</td>
				<td>
					<input type="text" name="imie" value="<?php echo($row['Imie']) ?>" width="100%">
				</td>
				<td>
					<input type="text" name="nazw" value="<?php echo($row['Nazwisko']) ?>" width="100%">
				</td>
				<td>
					<input type="text" name="dataur" value="<?php echo($row['DataUr']) ?>" width="100%">
				</td>
				<td>
					<input type="text" name="miasto" value="<?php echo($row['Miasto']) ?>"width="100%">
				</td>
			</tr>
		</table>
		</br>
		<center>
		<input type="reset" value="REZYGNACJA">
		<input type="submit" value="AKTUALIZUJ">
		</center>
		
	</form>
	
	<?php
		mysqli_close($id_pol);
	?>

</body>
</html>