<html>
<head>
	<title>Obsługa SQL</title>
	<meta charset="UTF-8">
</head>
<body>
	<h1>Głosowanie:</h1>
	<form action="glosowanie.php" method="POST">
		<table border="1" align="center">
		 <tr>
			<td>Bąk</td><td><input type="radio" name="glos" value="Bak" width="100%"></td>
		</tr>
        <tr>
			<td>Cecot</td><td><input type="radio" name="glos" value="Cecot" width="100%"></td>
		</tr>
        <tr>
			<td>Michta</td><td><input type="radio" name="glos" value="Michta" width="100%"></td>
		</tr>
        <tr>
			<td>Nowak</td><td><input type="radio" name="glos" value="Nowak" width="100%"></td>
		</tr>
        <tr>
			<td>Opala</td><td><input type="radio" name="glos" value="Opala" width="100%"></td>
		</tr>
        <tr>
			<td>Pawlak</td><td><input type="radio" name="glos" value="Pawlak" width="100%"></td>
		</tr>
        <tr>
			<td>Zawadzki</td><td><input type="radio" name="glos" value="Zawadzki" width="100%"></td>
		</tr>
		</table>
		</br>
		<center>
		<input type="reset" value="REZYGNACJA">
		<input type="submit" value="GŁOSUJ">
		</center>
	</form>

    <?php
		$url = 'localhost';
		$identyfikator = 'root';
		$haslo = '';
		$baza_danych='wybory';
		$tabela='kandydaci';
		
		if (isset($_COOKIE["glosowal"])) {
			echo "już oddałeś głos";
			exit;
		}

        if (isset($_POST["glos"]))
		{
			setcookie('glosowal',1,time()+(1*1*1*60)); //ustawienie ciasteczka na 1 minutę
					//zmienne przechwycone
					$glos=$_POST["glos"];
       
		$id_pol=mysqli_connect($url,$identyfikator,$haslo,$baza_danych) or die("</br>BŁĄD POŁĄCZENIA Z BAZĄ ".$baza_danych);
		$zapytanie="select * from ".$tabela." WHERE Nazwisko=\"$glos\";";
        $wynik=mysqli_query($id_pol,$zapytanie) or die("<b>Błąd wykonania zapytania:</b></br>".$zapytanie);
        while($row = mysqli_fetch_array($wynik)) 
		{
            echo(" ID ".$row['Id']." Nazwisko ".$row['Nazwisko']." Głosy= ".$row['Glosy']);
			$liczbaglosow=$row['Glosy'];
            $liczbaglosow++;
            echo(" Po zaglosowaniu mamy ".$liczbaglosow);
        }
       // mysqli_close($id_pol);
       // $id_pol2=mysqli_connect($url,$identyfikator,$haslo,$baza_danych) or die("</br>BŁĄD POŁĄCZENIA Z BAZĄ ".$baza_danych);
        $zapytanie2="UPDATE kandydaci SET Glosy = $liczbaglosow WHERE kandydaci.Nazwisko=\"$glos\";";
        $wynik2=mysqli_query($id_pol,$zapytanie2) or die("<b>Błąd wykonania zapytania:</b></br>".$zapytanie2);
        mysqli_close($id_pol);
        }
?>

</body>
	