<?php
$arrayBuah = ["Jeruk","Jambu","Melon","manggah"];
//mengurutkan array sort
sort($arrayBuah);

//menghapus array yang paling terakhir
array_pop($arrayBuah);

//menghapus yang setelah diurutkan atau variabel ataupun value arrat
unset($arrayBuah[3]);

//menambahkan dipaling akhir
array_push($arrayBuah, "Buah Naga");

//menghapus data paling akhir
array_shift($arrayBuah);

//menambah array dipaling awaly
array_unshift($arrayBuah, "Jambu");


foreach($arrayBuah as $buah) {
    echo "<br>" . $buah ;
}