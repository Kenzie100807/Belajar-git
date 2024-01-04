<?php


$nilaiHarian = 68;
$nilaiUts = 80;
$nilaiAkhir = 80;

$KkmNilaiHarianBagus = $nilaiHarian >= 70;
$KkmNilaiUtsBagus = $nilaiUts >= 80;
$KkmNilaiAkhirBagus = $nilaiAkhir >= 80;

$hasil1 = $KkmNilaiHarianBagus && $KkmNilaiUtsBagus && $KkmNilaiAkhirBagus;
$hasil2 = $KkmNilaiHarianBagus || $KkmNilaiUtsBagus || $KkmNilaiAkhirBagus;
var_dump($hasil1);
var_dump($hasil2);

//Alasan mengapa dapat tertampil true & false

//$hasil1 (false):
//Hasil 1 dapat menampilkan false karna terdapat satu nilai yang false
// yaitu nilai harian yang 68, sedangkan kkm nilai harian adalah 70, dan bila kita menggunkan Operator AND 
//Jika ada satu Nilai yang bernilai False, Maka keseluruhan hasil yang muncul akan False



//$apakahNilaiHarianBagus adalah false karena nilai harian (68) tidak memenuhi kondisi (>= 70).
//$apakahNilaiUtsBagus adalah true karena nilai UTS (80) memenuhi kondisi (>= 80).
//$apakahNilaiAkhirBagus adalah true karena nilai akhir (80) memenuhi kondisi (>= 80).
//Oleh karena itu, $hasil1 menggunakan operator AND (&&), dan karena satu kondisi tidak terpenuhi (false), hasil keseluruhan juga false.

//$hasil2 (true):

//$apakahNilaiHarianBagus adalah false.
//$apakahNilaiUtsBagus adalah true.
//$apakahNilaiAkhirBagus adalah true.
//Oleh karena itu, $hasil2 menggunakan operator OR (||), dan karena itu setidaknya satu kondisi terpenuhi (true), hasil keseluruhan juga true.
