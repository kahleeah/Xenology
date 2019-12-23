<?php
session_start();
define("userdb", "root");
define("passdb", "");
define("hostdb", "localhost");
define("namedb", "diskominfosanjogja");

$koneksi = mysqli_connect(hostdb,userdb,passdb,namedb) or die("<h1>Koneksi Database Error</h1>");
function cek_login(){
	if(!empty($_SESSION['role']) && $_SESSION['role']=="user"){
		echo "<script>
		window.location.href = '/user';
		</script>";
	}
	elseif(!empty($_SESSION['role']) && $_SESSION['role']=="admin"){
		echo "<script>
		window.location.href = '/admin';
		</script>";
	}
}

function cek_admin(){
	if($_SESSION['role']!="admin"){
		echo "<script>
		window.location.href = '/user';
		</script>";
	}
}

function cek_user(){
	if($_SESSION['role']!="user"){
		echo "<script>
		window.location.href = '/logout';
		</script>";
	}
}
?>
