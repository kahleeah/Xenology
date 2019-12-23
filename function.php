<?php 
function hitung(){
	$hasil = 5*7;
	echo $hasil;
	echo "<br>";
}
hitung();
hitung();

function hitung_a_kali_b($n1,$n2){
	$hasil = $n1*$n2;
	echo $hasil;
	echo "<br>";
}

hitung_a_kali_b(200,300);
hitung_a_kali_b(10000,32641823765);

function hasil_perhitungan($a,$b){
	$hasil = $a*$b;
	return $hasil;
}
$hitung_kedua = 50 + hasil_perhitungan(4,3);
echo "<br>".$hitung_kedua;



?>