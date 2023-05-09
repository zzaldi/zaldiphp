<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Belajar PHP</title>
  </head>
  <body>

  <?php
$Karakter = "Saat ini saya sudah mencapai materi php()";
echo "karakter yang diambil: " . substr($karakter, 0 ,10);

$Karakter = "Aku telah melalui tahapan belajar php string, sekarang telah mencapai tahapan substr.()";
echo "karakter yang diambil: " . substr($karakter, 3 ,20);
  ?>

  </body>
</html>