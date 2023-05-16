<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Belajar PHP</title>
 </head>
   <body>

     <?php
     //definisi nama fungsi input
      $namaLengkap = '';
      $kelas = '';
      
      $namaLengkapEror = '';
      $kelasEror = '';
     /*definisi namaEror fungsi input*/
      function dataTypee($dataKelas)
      {
         $inputData = trim ($dataKelas);
         $inputData = stripslashes ($dataKelas);
         $inputData = htmlspecialchars ($dataKelas);
         return $inputData;
      }

 if ($_SERVER['REQUEST_METHOD'] === "POST") {
        if(empty($_POST['namaLengkap'])) {
                $namaLengkapEror = ' nama lengkap tidak boleh kososng ';
        } else {
                $namaLengkap = dataTypee($_POST['namaLengkap']);
        }

        if (empty($_POST['kelas'])) {
            $kelasEror = " kelas tidak boleh kosong";    
        } else {
                $kelas = dataTypee($_POST['kelas']);
        }
      }

      
     ?>

     <form ectioon ="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"method="post">
     <div style = margin-bottom:3px;>
     <label for=" namaLengkap ">namaLengkap</label>
     <input type="text" id="namaLengkap" name="namaLengkap">
     <span style="color: red; font-size:12px;""><?php echo $namaLengkapEror; ?></span>
     </div>
     <div style = margin-bottom:3px;>
     <label for="kelas">kelas</label>
     <input type="number" id="kelas" name="kelas">
     <span style="color: red; font-size:12px;"><?php echo $kelasEror; ?></span>
     </div>
     <button type="sumit">Simpan</button>
     </form>

     <?php
     echo "nama saya adalah " . $namaLengkap;
     echo "<br>";
     echo " Kelas saya saat ini " . $kelas;
     ?>

     <?php echo " today is " . date("D M Y"); ?>
     <?php include './include.php'; ?>
     <?php include '../penugasan/include.php'; ?>

   </body>
</html>