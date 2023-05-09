<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>string_implode</title>
 </head>
   <body>

     <?php
     $arraytampumg = array(" Ilham " , " Zaldi " , " Arif " , " husain ");
     $implode = implode("/", $arraytampumg);
     echo $implode; 
     
     $arraytampumg = array("    HTML " , " Javascript " , " css " , " php ");
     $implode = implode("-", $arraytampumg);
     echo $implode;
     ?>

   </body>
</html>