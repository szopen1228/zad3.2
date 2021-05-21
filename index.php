<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pierwsza</title>
  </head>
  <body>

    <form method="get">
      <input type="number" name="number" min="0" max="1000000000">
      <input type="submit" value="Submit">
    </form>


    <?php
    error_reporting(E_ERROR | E_PARSE);
    $n = $_GET['number'];

       if ($n < 1) {
         echo ("To pojęcie nie ma zastosowania dla $n.");
       } elseif ($n == 1) {
         echo ('Liczba 1 nie jest ani pierwsza, ani złożona.');
         die;
       } if ($p = True) {
         for ($i = 2; $i < $n; $i++) {
           if ($p) {
             if ($n % $i == 0) {
              $p = False;
             }
           }
         }
      }
      if ($p) {
        echo ("Liczba $n jest pierwsza.");
      } else {
        echo ("Liczba $n to liczba złożona.");
      }



    ?>

  </body>
</html>
