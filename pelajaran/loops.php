<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Belajar PHP</title>
 </head>
   <body>

     <?php
 for ($awal = -1; $awal <= 5 ; $awal++){
        echo " nilai:" . $awal . "<br>";
 }
echo "<br>";
 
 //example 2
for ($awal = 1;; $awal++){
   if($awal > 10){
        break;
   }

}

//do while
//$i = 1;
//do {
       // echo $i . "";
       // $i++;
        //echo ($i <= 10);
//}



//echo "<br>";
//foreach
$arrayTeman = array("kelas i","kelas ii","kelasii");
foreach ($arrayTeman as $array) {
   echo $array . "<br>";
}


     ?> 
                         
   </body>
</html>