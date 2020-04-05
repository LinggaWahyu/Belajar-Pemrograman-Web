<!DOCTYPE html>
<html>
<head>
	<title>Hasil Upload</title>
</head>
<body>
	[<a href="tugas_form.html">Upload File</a>]
	<table border="1">
		<tr>
			<thead>
				<th>ID</th>
				<th>Nama file</th>
				<th>Tipe</th>
				<th>Ukuran</th>
				<th>Deskripsi</th>
				<th>Download </th>
			</thead>
		</tr>
		<tbody>
			<?php
				include "koneksi.php";
				$query = "SELECT id, name, type, size, description, path FROM tugas";
				$result = mysqli_query($koneksi, $query);
				while (list($id, $name, $type, $size, $description, $path) = mysqli_fetch_array($result)) {
			?>
				<tr>
					<td><?php echo $id; ?></td>
					<td><?php echo $name; ?></td>
					<td><?php echo $type; ?></td>
					<td><?php echo $size; ?></td>
					<td><?php echo $description; ?></td>
					<td><a href="<?php echo $path; ?>">Download</a></td>
				</tr>
			<?php
				}
			?>
		</tbody>
	</table>
</body>
</html>