<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Moja strona w PHP</title>
    </head>
    <body>
        Moja strona w PHP

        <!--<form method="get" action="">
            <label>liczba 1</label><input type="number" name="liczba1"><br>
            <label>liczba 2</label><input type="number" name="liczba2"><br>
            <input type="submit" value="dodaj">
        </form>-->

        <!----------------------------->

        <form method="post" action="">
            <label>liczba 1</label><input type="number" name="liczba1"><br>
            <label>Operacja arytmetyczna</label><input type="text" name="operacja"><br>
            <label>liczba 2</label><input type="number" name="liczba2"><br>
            <input type="submit" value="WYKONAJ">
        </form>

            <?php
                if ($_SERVER["REQUEST_METHOD"]=="POST") {
                    echo("<br>Dodawanie ");
                
                /*@$a=$_GET["liczba1"];
                @$b=$_GET["liczba2"];
                $suma=$a+$b;
                echo("<br>$a + $b = $suma ");*/
                
                //-----------------------------

                $a=$_POST["liczba1"];
                $b=$_POST["liczba2"];
                $operacja=$_POST["operacja"];
                    if ($operacja=="+") {
                        $suma=$a+$b;
                        echo("<br>$a + $b = $suma ");
                    }
                    if ($operacja=="-") {
                        $roznica=$a-$b;
                        echo("<br>$a - $b = $roznica ");
                    }
                    if ($operacja=='*') {
                        $iloczyn=$a*$b;
                        echo("<br>$a * $b = $iloczyn ");
                    }
                    if ($operacja=='/') {
                        if ($b=='') {
                            echo("<script> alert('Nie dzielimy przez zero'); </script>");
                            echo("Wstaw wartosc b");
                        }
                        if($b!=0) {
                            $iloraz=$a/$b;
                            echo("<br>$a / $b = $iloraz ");
                        }
                    }    
                }
                //-----------------------------
                
                echo("<br> Pierwszy tekst w PHP");
                echo("<br><b> Tekst pogrubiony </b>");
                echo("<br><i> Tekst pochylony </i>");

                $a=10;
                $b=20;
                $suma=$a+$b;
                echo("<br>$a + $b = $suma ");

                $roznica=$a-$b;
                echo("<br>$a - $b = $roznica");
                
                $iloczyn=$a*$b;
                echo("<br>$a * $b = $iloczyn");

                $iloraz=$a/$b;
                echo("<br>$a / $b = $iloraz");
            ?>
    </body>
</html>