<?php 
require_once 'config.php';

	if($_POST['password']==$_POST['ulangi_password']){
		$password = md5($_POST['password']);
		$query = mysqli_query($koneksi,
			"insert into user set username='".$_POST['username'].
			"', email='".$_POST['email'].
			"',password='".$password."'");
	}else{
		echo "<h1>Password dan Ulangi Password Tidak Sama</h1>
		<script>
		setTimeout(function(){
			window.history.back();
			},2000);
			</script>";
			die();
		} 

	if($query==1){
	echo "<h1>Anda Berhasil Registrasi</h1>
		<script>
		setTimeout(function(){
			window.location.href= '/beranda'
			},2000);
			</script>";
		}else{
			echo "<h1>Data GAGAL Ditambahkan</h1>
		<script>
		setTimeout(function(){
			window.history.back();
			},2000);
			</script>";
		}
?>