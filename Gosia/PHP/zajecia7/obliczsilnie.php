<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styl.css" />
</head>
<body>
<form method="post" action="obliczsilnie.php">
<label > liczba 1 </label> <input type="number" name="liczba1"> <br>
<input type="submit" value="silnia">
</form>

    <?php
   function silnia($n){
     if ($n<=0) { 
        echo(" silnia nie istnieje dla liczb ujemnych i zera<br>");
     }
else {
    $wynik=1;
    for ($i=1;$i<=$n; $i++)
    { $wynik*=$i;}
    return $wynik;
}

   }

   if (isset($_POST["liczba1"])) {
$liczba=$_POST["liczba1"];
echo("silnia liczby $liczba wynosi: ".  silnia($liczba));
   }
 else {
    echo("brak danych ");
 }


    ?>
    </table>
</body>
</html>