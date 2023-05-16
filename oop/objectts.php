<?php

class dealer_Car
{
        public $nama_Car;
        public $capa_city;

        function buy_Car()
        {
                echo "mobil tersedia, silakan beli.";
        }

        function type_Car()
        {
                echo "tersedia pilihan tipe mobil.";
        }
}
$buy = new dealer_Car();
$buy->buyCar();
echo "<br>";
$buy->nameCar = "Honda Civic 2023";
echo "<br>";
$buy->capacity = 2;
echo "<br>";
echo  " berhasil membeli " . $buy->nama_car . ' denmgan kapasitas ' . $buy->capacity;
