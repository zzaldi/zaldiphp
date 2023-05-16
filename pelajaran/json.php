<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Belajar PHP</title>
  </head>
  <body>
     //<?php
     //json ancode
     $kelas = array(
        // key = value
        'x' => ' kelas x ',  //tangkap 'x'
        'xi' => ' kelas xi ',
        'xii' => ' kelas xii ',
        'xiii' => ' kelas xiii ',
        'xiiii' => ' kelas xiii ',      
     );
      echo json_encode($kelas['x']);
echo "<br>";
      
foreach ($kelas as $array) {
   echo $array;
   
}
 
echo "<br>";

$kelasDecode = '{"x" : 1, "xi" : 2, "xii : 3"}';

$object = json_decode($kelasDecode);
print $object->{'x'};

?>

</body>
</html>
