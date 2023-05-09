<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Belajar PHP</title>
  </head>
  <body>

  <?php
 $Karakter = "belajar PHP menggunakan strlen()";
 echo "Karakter setelah di ubah:" . $Karakter;
 echo "/n";
 echo "Karakter setelah di ubah:" . str_replace($Karakter,"strlen", "str_replace");
  ?>

  </body>
</html>