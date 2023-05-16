<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Belajar PHP</title>
 </head>
   <body>

     <?php
$nilai = 80;
if ($nilai >= 75 ) {
                echo "kamu di bahah KKM";
} else {  
              echo "kamu sudah di atas KKM";
}

echo "<br>";
//waktu

$waktu = 12;

if ($waktu <= 10) {
        echo "selamat pagi";
}else{
        echo "selamat siang";      
}
echo "<br>";

//else if 

$nilaiTugas = 80;
if ($nilaiTugas >= 85){
    echo "selamat, kamu nilainya bagus ! (A)";
} elseif ($nilaiTugas >= 75){
    echo "selamat, nilai kamu cukup bagus! (-A)";
} elseif ($nilaiTugas >= 70){
    echo "selamat, nilai kamu bagus! (B) ";
} elseif ($nilaiTugas >= 80){
    echo "maaf, nilai kamu kurang (C)";
} elseif ($nilaiTugas >= 90){
    echo "Selamat, kamu remedial";
}

echo "<br>";
//swich

 $hari = "senin";
 switch ($hari){
        case 'senin';
           echo "Hari ini adalah senin";
           break;
        case 'Selasa';
           echo "hari ini adalah selasa";
           break;
        case 'rabu';
           echo "hari ini adalah rabu";
           break;
        case 'kamis';
           echo "hari ini adalah kamis";
           break;
        case 'jumat';
           echo "hari ini adalah jumat";
           break;
         default: 
           echo "hari weekend libur";
           break;
 }

 echo "<br>";
 //


     ?> 
                         
   </body>
</html>