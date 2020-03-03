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
				while ($c = $b->fetch_row()) { ?>
				<tr>
					<th><?php echo $no++; ?></th>
					<th><?php echo $c[1]; ?></th>
				</tr>
			<?php
			}
			?>	
		</tbody>
	</table>
</body>
</html>