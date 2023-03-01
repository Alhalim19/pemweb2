<?php
$profilearray = [
    "nama" => "Abdul Halim", 
    "kelas" => "SI14",

];

print_r($profilearray);
echo "<br>"; //buat ganti paragraf

$profileMultiarray = [
   [ 
        'nama' => 'Dul',
        'kelas' => 'SI21',
   ], [
        'nama' => 'Sel',
        'kelas' => 'SI11',
   ], [
        'nama' => 'Rel',
        'kelas' => 'SI01',
   ]
];

foreach($profileMultiarray as $profile) {
    echo $profile['nama'] . "<br>";
}