<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>str_replace</title>
  </head>
  <body>

  <?php
 $karakter = " kita sedang belajar javasctrip ";
 echo " Karakter sebelum di ubah:" . $karakter;
 echo " /n ";
 echo " Karakter setelah di ubah:" . str_replace($karakter,"strlen", " javascript menjadi PHP ");
 
  ?>

  </body>
</html>