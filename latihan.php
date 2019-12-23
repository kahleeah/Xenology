<!DOCTYPE html>
<html>
<head>
	<title>Diskominfosan Kota Yogyakarta</title>
	<link rel="icon" type="image/png" href="logo.png">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<style type="text/css">
		.navbar-dark.bg-dark{
			background-color: #27cf58 !important;
		}
		.dropdown-item{
			list -style-type: decimal !important;
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
					</ul>
				</li>
			</ul>
		</div>
	</div>
</body>
</html>


