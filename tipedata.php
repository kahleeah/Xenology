<?php 
$tulisan = "Diskominfo";
$angka = 2;
$Angka = 7.9;
$kosong = null;
$bool = true;
$arr = array('nama_depan' => 'Sigit','nama_tengah' => 'Aprianto','nama_belakang' => 'Kurniawan');

echo gettype($tulisan)."<br>";
echo gettype($angka)."<br>";
echo gettype($Angka)."<br>";
echo gettype($kosong)."<br>";
echo gettype($bool)."<br>";
echo gettype($arr)."<br>";

echo ($tulisan)."<br>";
echo ($angka)."<br>";
echo ($Angka)."<br>";
echo ($kosong)."<br>";
echo ($bool)."<br>";
print_r($arr);
echo "<br>";
print_r($arr['nama_depan']); //array assosiatif karena menggunakan kata
echo "<br>Jl. Manunggal no.".$angka;
echo "<br>";
echo $angka + 5;
echo "<br>";
echo $Angka + $angka; 
echo "<br>";
echo gettype($Angka + $angka);
echo "<br>";
echo round($Angka); //pembulatan
echo "<br>";
echo pow($angka,$Angka); //pangkat
echo "<br>";
echo substr("Pemkot Jogja",0,6);
echo "<br>";
echo strtoupper("Diskominfosan Kota Yogya");
echo "<br>";
echo strtolower("Diskominfosan Kota Yogya");
?>