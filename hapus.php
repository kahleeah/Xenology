<?php 
require_once 'config.php';

if(!empty($_GET['id'])){
	$query = mysqli_query($koneksi, "delete from user where id='".$_GET['id']."'");
	if($query==1){
		echo"
		<h1>Data Berhasil Dihapus</h1>
		<script>
		setTimeout(function(){
			window.location.href = '/admin';
			},2000);
			</script>
			";
		}else{
			echo"
			<h1>Data GAGAL Dihapus</h1>
			<script>
			setTimeout(function(){
				window.location.href = '/admin';
				},2000);
				</script>
				";
			}
			}else{
					echo"
					<h1>Anda Tidak Diijinkan Mengakses</h1>
					<script>
					setTimeout(function(){
						window.location.href = '/logout.php';
						},2000);
						</script>
						";
					}
		?>