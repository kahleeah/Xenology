<?php
include 'config.php';
print_r($_POST);

if(!empty($_POST["t"]) && !empty($_SESSION['token']) && $_POST["t"] == $_SESSION['token']){
	echo "anda otentik";
	$email = mysqli_real_escape_string($koneksi, $_POST['username']);
	$password = mysqli_real_escape_string($koneksi, $_POST['password']);
	$query = mysqli_query($koneksi, "SELECT * FROM user WHERE email = '$email' and password =MD5('$password')");

	// echo $q;
	// $query = mysqli_query($koneksi, $q);
	// print_r($query);

	$hasil = mysqli_fetch_array($query);
	// print_r($hasil);
	

	if(mysqli_num_rows($query) !=0 && $hasil['perijinan']=="diijinkan"){
		echo "<h1>Anda berhasil login</h1>
		<script>
		setTimeout(function(){
			window.location.href ='/admin';
			},2000
			);
		</script>";
			$_SESSION['perijinan'] = $hasil['perijinan'];
			$_SESSION['role'] = $hasil['role'];
			$_SESSION['username'] = $hasil['username'];
		}

		else{
			echo "<h1>Login gagal</h1>";
		}
	}

	else{
		echo "anda terdeteksi mencoba csrf";
	}

	?>