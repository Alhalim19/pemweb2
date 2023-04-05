<?php
class Bola
{
    public $jariJari;

    function hitungVolume() {
            return 4/3 * 3.14 * ($this->jariJari ** 7);
    }
}
$objekBola = new Bola;
$objekBola->jariJari = 14;
echo $objekBola->hitungVolume();