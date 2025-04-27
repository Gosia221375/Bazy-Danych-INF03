<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Parzyste</title>
    </head>
    <body>
        <table>
            <?php
                for ($i=1; $i<=20; $i++) {
                    if ($i%2 == 0) {
                        echo("<span style='color:green;'> $i parzysta </span><br>");
                    }
                    else {
                        echo("<span style='color:red;'> $i nieparzysta </span><br>");
                    }
                }
            ?>
        </table>
    </body>
</html>