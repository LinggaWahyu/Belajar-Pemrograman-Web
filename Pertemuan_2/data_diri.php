<?php
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$tempat_lahir = $_POST['tempat_lahir'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$bulan_lahir = $_POST['bulan_lahir'];
	$tahun_lahir = $_POST['tahun_lahir'];
	$jurusan = $_POST['jurusan'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Data Diri</title>
</head>
<body>
	<table border="1">
		<tr>
			<thead>
				<th>NIM</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Tempat & Tanggal Lahir</th>
				<th>Jurusan</th>
			</thead>
		</tr>
		<tr>
			<tbody>
				<th><?php echo $nim; ?></th>
				<th><?php echo $nama; ?></th>
				<th><?php echo $alamat; ?></th>
				<th><?php echo $tempat_lahir . ', ' . $tanggal_lahir . ' ' . $bulan_lahir . ' ' . $tahun_lahir; ?></th>
				<th><?php echo $jurusan; ?></th>
			</tbody>
		</tr>
	</table>
</body>
</html>