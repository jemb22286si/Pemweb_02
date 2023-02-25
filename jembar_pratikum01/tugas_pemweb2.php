<?php
$ns1 = ['id'=>1,'nim'=>'01101','uts'=>80,'uas'=>84,'tugas'=>78];
$ns2 = ['id'=>2,'nim'=>'01121','uts'=>70,'uas'=>50,'tugas'=>68];
$ns3 = ['id'=>3,'nim'=>'01130','uts'=>60,'uas'=>86,'tugas'=>70];
$ns4 = ['id'=>4,'nim'=>'01134','uts'=>90,'uas'=>91,'tugas'=>82];
$ns5 = ['id'=>5,'nim'=>'01156','uts'=>100,'uas'=>91,'tugas'=>82];

$ar_nilai = [$ns1, $ns2 , $ns3, $ns4,$ns5];

?>

<body style="background-color: white ;">
<h3 align="center"  style="color:black;">Daftar Nilai Siswa </h3>
<table border="5px" width="100%">

<thead>
<tr>
<th style="background-color: red;">No</th>
<th style="background-color: Green;">NIM</th>
<th style="background-color: blue;">UTS</th>
<th style="background-color: navy;">UAS</th>
<th style="background-color: pink;">Tugas</th>
<th style="background-color: gold;">Nilai Akhir</th>
</tr>
</thead>

<tbody>
<?php
$nomor = 1;
foreach($ar_nilai as $ns){
echo '<tr align="center"><td style="background-color: white;">'.$nomor.'</td>';
echo '<td style="background-color: orange;">'.$ns['nim'].'</td>';
echo '<td style="background-color: yellow;">'.$ns['uts'].'</td>';
echo '<td style="background-color: purple;">'.$ns['uas'].'</td>';
echo '<td style="background-color: brown;">'.$ns['tugas'].'</td>';
$nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;
echo '<td style="background-color: silver;">'.number_format($nilai_akhir,2,',','.').'</td>';
echo '<tr/>';
$nomor++;
}
?>
</tbody>
</table>