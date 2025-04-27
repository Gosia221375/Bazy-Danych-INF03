<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pętla</title>
        <link rel="stylesheet" href="styl.css"/>
    </head>
    <body>
        <table>
            <?php
                for ($i=1; $i<=10; $i++) {
                    echo("<tr>");
                        for ($j=1; $j<=10; $j++) {
                            $iloczyn=$i*$j;
                            echo("<td>$iloczyn</td>");
                        }
                    echo("</tr>");
                }
            ?>
        </table>
    </body>
</html>