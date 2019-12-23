<?php
// $instansi = "diskominfo";
// // super variabel
// echo $GLOBALS["instansi"]."<br>";
// echo "<br>";
// echo $_SERVER['SERVER_NAME']."<br>";

session_start();
$_SESSION['nama'] = "Sigit";
echo $_SESSION['nama'];
// session_destroy();

setcookie("nama"," AK",time() + 0.1 * 60);

$data = array('instansi' => array('nama' => 'Diskominfosan','alamat' => 'Jl. Timoho'),'instansi2' => array('nama' => 'Inixindo Jogja','alamat' => 'Jl. Kenari'));
$data2 = array(0 => array(0 => 'Diskominfosan',1 => 'Muja-muju'),1 => array(0 => 'Inixindo Jogja',1 => 'Timoho'));
echo "<br>";
print_r($data['instansi']['nama']."<br>".$data['instansi2']['alamat']);
echo "<br>";
$n = 1;
print_r($data2[$n][0]."<br>".$data2[$n][1]);
echo "<br>";
echo md5($data2[$n][0],'Pa$$word');
echo "<br>";
echo md5($data2[$n][0]);

echo $data2[1][0] = 'Pemkot Inixindo';
echo "<br>";
print_r($data2);

$arr =['instansi3' => ['nama' => 'Inixindo Jakarta','alamat' => 'Kebayoran Baru'],'instansi4' => ['nama' => 'Pemkot Jakarta','alamat' => 'Kebayoran Lama']];
echo "<br>";
print_r($arr);

//buatlah array tentang data satu kelas, berupa (nama : depan, tengah, belakang) dan (bidang :nama bidang)

$datakelas =['Nama depan Pegawai 1' => ['depan' => 'Sigit','tengah' => 'Aprianto','belakang' => 'Kurniawan'],'berada di bidang' => ['bidang' => 'Persandian']];
echo "<br>";
print_r($datakelas);
echo "<br>";

$pegawai = 1;
$datapegawai =[1 => ['nama depan' => 'Sigit','nama tengah' => 'Aprianto','nama belakang' => 'Kurniawan','berada di bidang' => 'Persandian'],
			  2 => ['nama depan' => 'Cahyo','nama tengah' => 'Cahyo','nama belakang' => 'Wibowo','berada di bidang' => 'Telekomunikasi'],
			  3 => ['nama depan' => 'Fransisca','nama tengah' => 'Julia','nama belakang' => 'DK','berada di bidang' => 'Santel']];
echo "<br>";


echo "Nama depan pegawai = ".$datapegawai[$pegawai]["nama depan"].", Nama tengah pegawai = ".$datapegawai[$pegawai]["nama tengah"].", Nama belakang pegawai = ".$datapegawai[$pegawai]["nama belakang"].", Bekerja di Bidang = ".$datapegawai[$pegawai]["berada di bidang"];
//print_r$datapegawai[1];
?>