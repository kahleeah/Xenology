<?php 
cek_admin();
?>


<h1 style="text-align: center;"> Daftar Akun </h1>
<table class="table col-md-9" style="margin: auto;">
	<thead class="table-dark">
		<tr>
			<td>No</td>
			<td>Username</td>
			<td>Email</td>
			<td>Perijinan</td>
			<td>Role</td>
			<td>Tindakan</td>
		</tr>
	</thead>
	<tbody>
		<?php
		$query = mysqli_query($koneksi, "select * from user");
		$hasil = mysqli_fetch_all($query);
		// print_r($hasil);

		$no = 1;

		foreach ($hasil as $idx => $nilai){
			echo "<tr>
			<td>".$no."</td>
			<td>".$nilai[1]."</td>
			<td>".$nilai[3]."</td>
			<td>".$nilai[5]."</td>
			<td>".$nilai[4]."</td>
			<td>
			<a href='/hapus.php?id=".$nilai[0]."'class='btn btn-danger' onclick='return confirm(\"Hapus?\")'>
			<i class='fa fa-eraser'></i>
			Hapus
			</a>

			<a href='/ubah&id=".$nilai[0]."'class='btn btn-warning'>
			<i class='fa fa-pencil'></i>
			Ubah
			</a>
			</td>
			</tr>";
			$no = $no + 1;
		}
		?>
	</tbody>
</table>
