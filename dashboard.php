<!DOCTYPE html>

<?php 
include 'config.php'
?>

<html>
<head>
	<title>Diskominfosan Kota Yogyakarta</title>
	<link rel="icon" type="image/png" href="logo.png">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<style type="text/css">
		.navbar-dark.bg-dark{
			background-color: #6D1C0B !important;
		}
		.dropdown-item{
			list-style-type: decimal !important;
		}
	</style>
</head>


<body>
	<div class="navbar navbar-expand-md navbar-dark bg-dark mb-4" role="navigation">
		<a class="navbar-brand" href="http://localhost/dashboard.php">
			Diskominfosan
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="menu">
			<ul class="navbar-nav mr-auto navbar-right">
				<li class="nav-item activate">
					<a class="nav-link" href="https://kominfo.jogjakota.go.id">Diskominfo</a>
				</li>
				<li class="nav-item activate">
					<a class="nav-link" href="https://www.instagram.com/pemkotjogja/?hl=id">Instagram</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expand="false">Latihan</a>
					<ul class="dropdown-menu" aria-labelledby="dropdowm1-1">
						<li class="dropdown-item">
							<a href="dashboard.php?p=variabel">latihan variabel</a>
						</li>
						<li class="dropdown-item">
							<a href="dashboard.php?p=index">latihan index</a>
						</li>
						<li class="dropdown-item">
							<a href="dashboard.php?p=kendali_program">latihan kendali program</a>
						</li>
						<li class="dropdown-item">
							<a href="dashboard.php?p=function">latihan function</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
		
		<div>
			<ul class="navbar-nav mr-auto navbar-right">
				<li class="nav-item activate">
					<?php 
					if(empty($_SESSION['username'])){
						?>
						<a class="nav-link" href="/login" type="button" data-toggle="modal" data-target="#login">
							<i class="fa fa-user-o" style='font-size: 16px; color: #fff8bf'>
							</i>
							Login
						</a>
						<?php
					}
					else{
						?>
						<a class="nav-link" href="/logout.php">
							<i class="fa fa-user-o" style='font-size: 16px; color: #fff8bf'>
							</i>
							Logout, <?= $_SESSION['username']?>
						</a>
						<?php
					}
					?>
				</li>
			</ul>
		</div>
	</div>
	<div class="container-fluid">
		<!-- <div class="jumbotron"> -->
			<?php	
			// print_r($_GET);
			// print_r($_GET['p']);
			// include "variabel.php";
			// include_once "variabel.php";
			// require "variabel.php";
			if(!empty($_GET['p']) && file_exists($_GET['p'].".php"))
			{
				require_once $_GET['p'].".php";
			}
			else{
				require_once "beranda.php";
			}
			?>
			<!-- </div> -->
		</div>


		<!-- Modal -->
		<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalCenterTitle">Go ahead if you wanna login</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form action="/login.php" method="post">
							<div class="form-group">
								<?php 
								$token = rand();
								$g_token = md5($token);
								// session_start();
								$_SESSION['token'] = $g_token;
								?>
								<input type="hidden" name="t" value="<?= $g_token ?>">
								<label for="exampleInputEmail1">Username</label>
								<input type="text" class="form-control" id="defalutForm-pass" aria-describedby="emailHelp" name="username" required
								>
								<!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Password</label>
								<input type="text" class="form-control" id="exampleInputPassword1" name="password" required>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
								<button type="submit" class="btn btn-primary">Login</button>
								<a class="btn btn-warning" data-toggle="modal" data-target="
								#formRegistrasi" style="color: white">
								Registrasi
							</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="formRegistrasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalCenterTitle">Please Register</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="/registrasi.php" method="post">
						<div class="form-group">
							<!-- <?php 
							$token = rand();
							$g_token = md5($token);
							// session_start();
							$_SESSION['token'] = $g_token;
							?> -->
							<input type="hidden" name="t" value="<?= $g_token ?>">
							<label for="exampleInputEmail1">Username</label>
							<input type="text" class="form-control" id="defalutForm-pass" aria-describedby="emailHelp" name="username" required>		
						</div>

						<div class="form-group">
							<label for="exampleInputPassword1">Password</label>
							<input type="password" class="form-control" id="password" name="password" required>
						</div>

						<div class="form-group">
							<label for="exampleInputPassword1">Confirm Password</label>
							<input type="password" class="form-control" id="ulangi_password" name="ulangi_password" required onkeyup="cek_password()">
							<div id="keterangan"></div>
						</div>

						<div class="form-group">
							<label for="exampleInputPassword1">Email</label>
							<input type="text" class="form-control" id="exampleInputPassword1" name="email" required pattern="^[\w-]+(\.[\w-]+)*@([a-z0-9-]+(\.[a-z0-9-]+)*?\.[a-z]{2,6}|(\d{1,3}\.){3}\d{1,3})(:\d{4})?$">
						</div>

						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Register</button>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
	<style type="text/css">
		.nav-link{
			background:  #6D1C0B !important;
		}
	</style>

	<script type="text/javascript">
		function cek_password(){
		if(document.getElementById("password").value != document.getElementById("ulangi_password").value)
		{
			document.getElementById("keterangan").innerHTML = "Password Tidak Sama";
		}else{
			document.getElementById("keterangan").innerHTML = "Password Sama";
		}
	}
</script>
</body>
</html>

<!-- pattern="^[\w-]+(\.[\w-]+)*@([a-z0-9-]+(\.[a-z0-9-]+)*?\.[a-z]{2,6}|(\d{1,3}\.){3}\d{1,3})(:\d{4})?$" -->