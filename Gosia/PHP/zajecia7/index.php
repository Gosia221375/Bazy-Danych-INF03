<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <form method="post" action="">
  <label > liczba 1 </label> <input type="number" name="liczba1"> <br>
  <label > Oparecja arytmetyczna </label> <input type="text" name="operacja"> <br>
  <label > liczba 2 </label> <input type="number" name="liczba2"> <br>
  <input type="submit" value="WYKONAJ">
</form>
    <?php
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
           echo("<br>Dodawanie "); 

      $a=$_POST["liczba1"];
      $b=$_POST["liczba2"];
      $operacja=$_POST["operacja"];
              if ($operacja=='+') {
                  $suma=$a+$b;
                  echo("<br>$a + $b = $suma ");
             }
             if ($operacja=='-') {
                $roznica=$a-$b;
                echo("<br>$a - $b = $roznica ");
           }
        if ($operacja=='/') {
           if($b=='') {echo("<script> alert('nie dzielimy przez zero'); </script>");
                      echo("Wstaw wartosc b");
                      }
             if($b!=0)    {      
                           $iloraz=$a/$b;
                           echo("<br>$a / $b = $iloraz ");
                      }
       }
         
    }

    ?>
    
</body>
</html>