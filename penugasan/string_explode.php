<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Penugasan Explode</title>
 </head>
   <body>

     <?php
     $arraykelompok = array(" Bintang "," Zaldi "," Nabil "," Husain ");
     $implode = implode(",", $arraykelompok);
     echo $implode;
     
     $arraykelompok = " Bintang, Zaldi, Nabil, Husain ";
     $implode = implode('-', $arraykelompok);
     print_r($inplode);
     ?>

   </body>
</html>