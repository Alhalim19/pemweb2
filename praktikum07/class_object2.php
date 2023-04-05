<?php
class Buah
{
    public $warnaBuah = "Oranye";
    public $namaBuah = "Jeruk";
    public $rasa = "Kecut";

    function tumbuh()
    {
        return "$this->nama itu bisa tumbuh";
    }

    function busuk()
    {
        return "$this->nama itu bisa busuk";
    }
}
$objekBuah = new Buah;
$objekBuah->nama = "Semangka";
$objekBuah->warna = "Merah";
$objekBuah->rasa = "Manis";
echo $objekBuah->tumbuh();
echo "<br>";
echo $objekBuah->busuk();