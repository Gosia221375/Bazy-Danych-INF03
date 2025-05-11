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

		$zapytanie="select * from ".$tabela;
		
		echo("
			<table rules=none align=center>
				<tr bgcolor=#5F9EA0 height=30>
					<th width=30>LP</th>
					<th width=30>ID</th>
					<th width=150>Imię</th>
					<th width=150>Nazwisko</th>
					<th width=100>Data ur.</th>
					<th width=150>Miasto</th>
					<th width=150></th>
					<th width=150></th>
				</tr>
		");
		
		$wynik=mysqli_query($id_pol,$zapytanie) or die("<b>Błąd wykonania zapytania:</b></br>".$zapytanie);

		$kolor1="#FFF8DC";
		$kolor2="#DCDCDC";
		$lp=1;
		
		while($row = mysqli_fetch_array($wynik)) 
		{
			if ($lp%2==1)
				echo("<tr bgcolor=$kolor1>");
			else
				echo("<tr bgcolor=$kolor2>");
					
			echo("<td align=center> ".$lp."</td>");
			$lp++;
			echo("<td align=center> ".$row['Id']." </td>");
			echo("<td> ".$row['Imie']." </td>");
			echo("<td> ".$row['Nazwisko']." </td>");
			echo("<td align=center> ".$row['DataUr']." </td>");
			echo("<td align=center> ".$row['Miasto']." </td>");
			//Dodanie akcji
			echo("<td align=center valign=middle>");
			//WARIANT I
			//echo("<form action=edit2.php method=POST>
			//			<input type=hidden name=ID value=$row[Id]>
			//			<input type=submit value='Edytuj'>
			//	  </form>");
			//echo("</td>");
			
			//WARIANT II
			echo("<form action=edit2.php method=POST>
						<button type=submit name=ID value=$row[Id]>Edycja</button>
				  </form>");
			echo("</td>");
			
			echo("<td align=center valign=middle>");
			echo("<form action=delete2.php method=POST>
						<input type=hidden name=ID value=$row[Id]>
						<input type=submit value='Usuń'>
				  </form>");
			echo("</td>");
				  
			echo("</tr>");
			
		}
		
		echo("</table>");
		
		mysqli_close($id_pol);
	?>

</body>
</html>