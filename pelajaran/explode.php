<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Belajar PHP</title>
 </head>
   <body>

     <?php
     $stringtunggal = array("Bintang","alam","Firman","arya","Zaldi");
     $explode = explode(",", $stringTunggal);
     print_r($explode); //menjadi bentuk array adari string tunggal
     ?> 

   </body>
</html>