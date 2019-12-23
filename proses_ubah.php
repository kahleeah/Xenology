<?php 
require_once 'config.php';

if($_POST['password']=="*****"){
	$query = mysqli_query($koneksi,
		"update user set username='".$_POST['username'].
		"', email='".$_POST['email'].
		"', role='".$_POST['role'].
		"', perijinan='".(!empty($_POST['perijinan']) ? 'diijinkan' : 'belum').
		"' where id='".$_POST['id']."'");
}else{
	if($_POST['password']==$_POST['ulangi_password']){
		$password = md5($_POST['password']);
		$query = mysqli_query($koneksi,
			"update user set username='".$_POST['username'].
			"', email='".$_POST['email'].
			"', role='".$_POST['role'].
			"', perijinan='".(!empty($_POST['perijinan']) ? 'diijinkan' : 'belum').
			"',password='".$password.
			"' where id='".$_POST['id']."'");
	}else{
		echo "<h1>Password dan Ulangi Password Tidak Sama</h1>
		<script>
		setTimeout(function(){
			window.history.back();
			},2000);
			</script>";
			die();
		} 
	}
	if($query==1){
	echo "<h1>Data Berhasil Diubah</h1>
		<script>
		setTimeout(function(){
			window.location.href= '/admin'
			},2000);
			</script>";
		}else{
			echo "<h1>Data GAGAL Diubah</h1>
		<script>
		setTimeout(function(){
			window.history.back();
			},2000);
			</script>";
		}
?>