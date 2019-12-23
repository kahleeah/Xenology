<?php 
//pengkondisian
$bool = 5 < 10;
if(5 > 10){
	echo "Kondisi Benar, lima lebih dari sepuluh";
}
elseif(5 < 10){
	echo "Kondisi Benar, lima kurang dari sepuluh";
	echo "<br>";
	if(7 < 10){
		echo "If di dalam if, kondisi benar, tujuh kurang dari sepuluh";
	}
}
elseif(7 < 10){
	echo "Kondisi Benar, tujuh kurang dari sepuluh";
}
else{
	echo "Kondisi Salah";
}		
echo "<br>";
//switch case

switch (5+8) {
	case 10:
	echo "hasilnya sepuluh";
		# code...
	break;
	case 9:
	echo "hasilnya sembilan";
		# code...
	break;
	case 8:
	echo "hasilnya delapan";
		# code...
	break;
	
	default:
		# code...
	echo "Tidak ada hasil yang benar";
	break;
}
echo "<br>";
// perulangan
//$n = 1;
for ($n=0; $n <= 10 ; $n++) { 
	echo "Hasil : $n <br>";
}

// do..while
$n=0;
do{
	echo "Hasil : $n <br>";
	$n++;
}
while ($n<=10);

//while
$n=0;
while ($n <= 10) {
	echo "Hasil : $n <br>";
	$n++;
}

$n=0;
do{
	echo "Hasil : $n <br>";
	echo "Hasil do..while";
	$n++;
}
while ($n<0);

//while
$n=0;
while ($n <0) {
	echo "Hasil : $n <br>";
	echo "Hasil while";
	$n++;
}

$data_arr = ['Sigit','Cahyo','Julia','Retno'];
foreach ($data_arr as $key => $value) {
	echo "<br>Nama depan pegawai $key = ".$value;
}

$datapegawai =[1 => ['nama depan' => 'Sigit','nama tengah' => 'Aprianto','nama belakang' => 'Kurniawan','berada di bidang' => 'Persandian'],
2 => ['nama depan' => 'Cahyo','nama tengah' => 'Cahyo','nama belakang' => 'Wibowo','berada di bidang' => 'Telekomunikasi'],
3 => ['nama depan' => 'Fransisca','nama tengah' => 'Julia','nama belakang' => 'DK','berada di bidang' => 'Santel']];

foreach ($datapegawai as $index => $hasil) {
	echo "<br>Nama pegawai $index = ".$hasil['nama belakang'];
}

foreach ($datapegawai as $index => $hasil) {
	foreach($hasil as $i => $h){
		echo "<br>$i = ".$h;
	}
}

?>