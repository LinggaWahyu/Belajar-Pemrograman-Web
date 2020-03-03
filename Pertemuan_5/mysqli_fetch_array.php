<!DOCTYPE html>
<html>
<head>
	<title>Mysql_fetch_array()</title>
</head>
<body>
	<table border="1">
		<tr>
			<thead>
				<td>No.</td>
				<th>Nama Mata Kuliah</th>
			</thead>
		</tr>
		<tbody>
			<?php
				$no = 1;
				include "koneksi.php";
				$a = "SELECT * FROM matkul";
				$b = $koneksi->query($a);
				while ($c = mysqli_fetch_array($b)) { ?>
				<tr>
					<th><?php echo $no++; ?></th>
					<th><?php echo $c['nm_matkul']; ?></th>
				</tr>
			<?php
			}
			?>	
		</tbody>
	</table>
</body>
</html>