<?php
// cara membuat array
$arrayBuah = ["Jeruk","Manggis","Apel"];
//cara kesatu
print_r($arrayBuah);
//
echo "<br>";
//cara kedua
var_dump($arrayBuah);
//cara ketiga
foreach($arrayBuah as $buah) {
    echo "<br>" . $buah ;
}