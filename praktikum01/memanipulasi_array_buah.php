<?php
$arrayBuah = ["Jeruk","Mangga","Apel","Belimbing","Ceri"];

//fungsinya mengurutkan value sesuai abjad dari array
sort($arrayBuah);  

//menghapus value array yg paling terakhir
array_pop($arrayBuah);

//menghapus spesifik value pada array
unset($arrayBuah[3]);

//menambahkan satu value array dibelakang
array_push($arrayBuah, "Durian");

//menghapus value array yg paling depan
array_shift($arrayBuah);

//menambahkan satu value array didepan
array_unshift($arrayBuah, "Naga");

//mengubah value array tertentu
$arrayBuah[2] = "Pisang";

foreach($arrayBuah as $buah){
    echo $buah . "<br>";
}