<?php
class Bola 
{
    public $jari;

    public function __construct($jari)
    {
        $this->jari = $jari;
    }

    public function hitungVolume()
    {
        return 4/3 * pi() * pow($this->jari,3);
    }

    public function hitungLuasSisi()
    {
        return 4 * pi() * pow($this->jari,2);
    }
}
$objectBola = new Bola(8);
echo "Volume bola  : " .
$objectBola->hitungVolume() . "<br>";
echo "Luas Sisi Bola : ".
$objectBola->hitungLuasSisi(). "<br>";
