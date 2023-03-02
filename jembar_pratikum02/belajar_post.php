<?php
$nama = $_POST['nama'];  
$jenis_kelamin = $_POST['jenis_kelamin'];
$hobi = $_POST['hobi'];  
$nim = $_POST['nim'];
$prodi = $_POST['Prodi'];  

echo "<h2>form Pendaftaran</h2><br>";
echo " Nama          : "  . $nama ." <br>";
echo " Jenis Kelamin : "  . $jenis_kelamin . "<br>";
echo " Hobi          : " . $hobi . "<br>";
echo " NIM           : "  . $nim . "<br>";
echo " Program Studi : " . $prodi;
