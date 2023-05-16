<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Belajar PHP</title>
 </head>
   <body>

     <?php
   define("fungsi", "ini adalah cetakan hasil fumngsi const dari fungsi");
   echo fungsi;
   
   echo "<br>";

   define("arrayKelas", [" kelas  x","kelas xi","kelas xii"]);
   echo "saya adalah" . arrayKelas[2];

   echo "<br>";

   define("name", "merupakan contoh global fungsi definisi");
   function smk()
   {
    echo name;
   }
   smk()

     ?> 
                         
   </body>
</html>