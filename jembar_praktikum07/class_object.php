<?php
class mamalia
{
    //properti class mamalia
    public $namaHewan;
    public $warna;
    public $habitat;
    public $makanan;

    function bisaMenyusui()
    {
        return "$this->namaHewan ini bisa menyusui !";
    }
    function berjalan()
    {
        return "$this->namaHewan ini bisa berjalan !";
    }
}
$object = new mamalia;
$object->namaHewan = "Monyet";
$object->warna = "Coklat";
$object->habitat = "Hutan";
$object->makanan = "Pisang/buah-buahan";
echo $object->bisaMenyusui();