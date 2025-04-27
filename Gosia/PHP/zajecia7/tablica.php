<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    $produkty=[
        "Chleb" => 10.00,
        "Masło" => 12.00,
        "Jabłka" => 6.00,
        "Ser" => 7.00
    ];

    $nazwa=$_POST["nazwa"];
    $cena=$_POST["cena"];
    $produkty[$nazwa]=$cena;

foreach ($produkty as $nazwa => $cena) {
  echo(" Produkt: $nazwa - Cena: $cena <br>");

}
?>
