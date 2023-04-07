<?php
class Balok
{
    public $lebar, $panjang, $tinggi;

    public function __construct($l, $p, $t)
    {
        $this->lebar = $l;
        $this->panjang = $p;
        $this->tinggi = $t;
    }
    public function hitungVolume()
    {
        return $this->lebar * $this->panjang * $this->tinggi;
    }

    public function hitungLuasSisi()
    {
        return 2 * ($this->panjang * $this->lebar + $this->panjang * $this->tinggi + $this->lebar * $this->tinggi); 
    }
}
$Balok = new Balok(4,12,20);
echo "Volume balok :" . $Balok->hitungVolume() . "<br>";
echo "Luas sisi balok :" . $Balok->hitungLuasSisi(). "<br>";