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
// połączenie z bazą danych
$con=new mysqli($host, $username, $password, $database);
// sprawdzanie połączenia
if ($con->connect_error) {die ("Błąd połączenia". $con->connect_error);}
echo("połączenia z bazą danych udane <br><br>");

$sql="SELECT * FROM `student` WHERE 1";
$result=$con->query($sql);

if ($result->num_rows >0){
    echo("<table><tr><td> Id </td> <td> nazwisko </td> <td> imie </td> <td> uwagi </td> </tr>");
while ($row=$result->fetch_assoc()){
 echo ("<tr>");
 echo("<td>".$row['id']." </td>");
 echo("<td>".$row['nazwisko']."</td> ");
 echo("<td>". $row['imie']."</td>");
 echo( "<td>".$row['uwagi']. "</td>");
 echo("</tr>");
}
echo("</table>");
}
$con->close();


?>
    
</body>
</html>