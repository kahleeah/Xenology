<?php 
cek_admin();
if(empty($_GET['id'])){
	header("Location: /logout.php");
} 

$query = mysqli_query($koneksi, "select *  from user where id ='".$_GET['id']."'");
$hasil = mysqli_fetch_assoc($query);
?>

<form action="proses_ubah.php" method="post">
	<input type="hidden" name="id" value="<?=$_GET['id'] ?>">
	<div class="border" style="padding: 20px; border-radius: 5px">
		<h2>Ubah Data: <?=$hasil['username']?></h2>
		<table>
			<tr>
				<td>
					<label>Username</label>
				</td>
				<td>
					<input type="text" name="username" value="<?=$hasil['username']?>" class='form-control validate'>
				</td>
			</tr>

			<tr>
				<td>
					<label>Password</label>
				</td>
				<td>
					<input type="password" name="password" value="*****" class='form-control validate' id="password">
				</td>
			</tr>

			<tr>
				<td>
					<label>Ulangi Password</label>
				</td>
				<td>
					<input type="password" name="ulangi_password" class='form-control validate' onkeyup="cek_password()" id="ulangi_password">
					<div id="keterangan"></div>
				</td>
			</tr>

			<tr>
				<td>
					<label>Email</label>
				</td>
				<td>
					<input type="email" name="email" class='form-control validate' value="<?=$hasil['email']?>">
				</td>
			</tr>

			<tr>
				<td>
					<label>Perijinan</label>
				</td>
				<td>
					<span>
						<div class="custom-control custom-switch">
							<input type="checkbox" name="perijinan" class="custom-control-input" id="ijin"
							<?= $hasil['perijinan'] == "diijinkan" ? "checked" : "" ?> onchange="ubah_ijin()" >
							<label class="custom-control-label" for="ijin" id="label_ijin">Tidak Diijinkan | Diijinkan</label>
						</div>
					</span>
				</td>
			</tr>
			<tr>
				<td>
					<label>Role</label>
				</td>
				<td>
					<select class='form-control validate' name="role">
						<option value="admin"
						<?= $hasil['role']=="admin" ? "selected" : "" ?>>Admin</option>
						<option value="user"
						<?= $hasil['role']=="user" ? "selected" : "" ?>>User</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					<button class="btn btn-primary"> SIMPAN </button>
					<button type="reset" class="btn btn-danger"> RESET </button>
				</td>
			</tr>



		</table>
	</div>
</form>
<script type="text/javascript">
	function ubah_ijin(){
		if(document.getElementById("ijin").checked){
			document.getElementById("label_ijin").innerHTML = "Diijinkan";
		}
		else{
			document.getElementById("label_ijin").innerHTML = "Tidak Diijinkan";
		}
	}
	ubah_ijin();
	function cek_password(){
		if(document.getElementById("password").value != document.getElementById("ulangi_password").value)
		{
			document.getElementById("keterangan").innerHTML = "Password Tidak Sama";
		}else{
			document.getElementById("keterangan").innerHTML = "Password Sama";
		}
	}
	// cek_password();
</script>
<style type="text/css">
	table tr td{
		padding: 5px;
		padding-right: 50px;
	}
</style>