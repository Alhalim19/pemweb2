<?php
//cara pertama
$arrayBuah = ["Jeruk","Mangga","Apel","Belimbing","Ceri"];

print_r ($arrayBuah);
echo "<br>"; //buat ganti paragraf

//cara kedua
$arrayBuah = ["Jeruk","Mangga","Apel","Belimbing","Ceri"];

var_dump($arrayBuah);
echo "<br>"; //buat ganti paragraf

//cara ketiga
$arrayBuah = ["Jeruk","Mangga","Apel","Belimbing","Ceri"];

foreach($arrayBuah as $buah){
    echo $buah . "<br>";
}