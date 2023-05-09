<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Belajar PHP</title>
 </head>
   <body>

     <?php
     $kalimatsting = "saat ini sudah belajar laravel";
     $cari = "/sudah/";
     $gantikan = "belum";
     echo preg_replace($cari, $gantikan, $kalimatsting);
     //ini contoh penggunaan 2
     echo preg_replace("/sudah/", "belum", "karakter spongebob sudah selesai");
     ?> 

   </body>
</html>