<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styl.css" />
</head>
<body>
    <?php
$host="localhost";
$username="root";
$password="";
$database="kkz";
$nazwisko=$_POST["nazwisko"];
$imie=$_POST["imie"];
$uwagi=$_POST["uwagi"];

 if (empty($nazwisko) || empty($imie)) {
    echo("brak danych");

 }
 else{
    // połączenie z bazą danych
    $con=new mysqli($host, $username, $password, $database);
    // sprawdzanie połączenia
    if ($con->connect_error) {die ("Błąd połączenia". $con->connect_error);}
    echo("połączenia z bazą danych udane <br><br>");

    $sql="INSERT INTO `student` (`id`, `nazwisko`, `imie`, `uwagi`) VALUES (NULL, '$nazwisko', '$imie', '$uwagi')";
    $dodaj=$con->prepare($sql);
    if ($dodaj->execute()){
    echo("dane zostały dopisane <br>");
    }
 }
?>
</body>
</html>

