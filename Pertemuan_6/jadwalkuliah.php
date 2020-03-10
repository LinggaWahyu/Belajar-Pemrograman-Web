<!DOCTYPE html>
<html>
<head>
	<title>Jadwal Kuliah</title>
</head>
<body>
	[<a href="form_jadwal.php">tambah</a>]
	<table border="1">
		<tr>
			<thead>
				<td>No.</td>
				<th>Mata Kuliah</th>
				<th>Hari</th>
				<th>Jam</th>
				<th>Ruangan</th>
			</thead>
		</tr>
		<tbody>
			<?php
				$no = 1;
				include "koneksi.php";
				$a = "SELECT * FROM jadwal NATURAL JOIN matkul";
				$b = mysqli_query($koneksi, $a);
				while ($c = mysqli_fetch_array($b)) {
			?>
				<tr>
					<th><?php echo $no++; ?></th>
					<th><?php echo $c['nm_matkul']; ?></th>
					<th><?php echo $c['hari']; ?></th>
					<th><?php echo $c['jam']; ?></th>
					<th><?php echo $c['ruang']; ?></th>
				</tr>
			<?php
			}
			?>	
		</tbody>
	</table>
</body>
</html>