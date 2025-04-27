<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <table>
            <?php
                function silnia($n) {
                    if ($n<=0) {
                        echo("Silnia nie istnieje dla liczb ujemnych i zera<br>");
                    }
                    else {
                        $wynik=1;
                        for ($i=1; $i<=$n; $i++) {
                            $wynik*=$i;
                        }
                        return $wynik;
                    }
                }

                if (isset)
                $liczba=4;
                echo("silnia liczby $liczba wynosi: ". silnia($liczba));
            ?>
        </table>
    </body>
</html>