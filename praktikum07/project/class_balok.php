<?php
class Balok
{
    public $panjang;
    public $lebar;
    public $tinggi;

    function hitungLuas() {
        return $this->panjang * $this->lebar * $this->tinggi;
    }
}
$objekBalok = new Balok;
$objekBalok->panjang = 12;
$objekBalok->lebar = 9;
$objekBalok->tinggi = 10;
echo $objekBalok->hitungLuas();