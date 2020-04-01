<!DOCTYPE html>
<html>
<head>
	<title>Hasil Harga</title>
</head>
<body>
	[<a href="form.php">Tambah</a>]
	<table border="1">
		<tr>
			<thead>
				<td>No.</td>
				<th>Harga Awal</th>
				<th>Diskon</th>
				<th>Harga Total</th>
			</thead>
		</tr>
		<tbody>
			<?php
				$no = 1;
				include "koneksi.php";
				$a = "SELECT * FROM tabel_harga";
				$b = mysqli_query($koneksi, $a);
				while ($c = mysqli_fetch_array($b)) {
					$harga = $c['harga_awal'];
					$diskon = 0;
					$total_harga = 0;
					if ($harga > 200000) {
						$diskon = 0.5 * $harga;
						$total_harga = $harga - $diskon;
					} else {
						$total_harga = $harga;

					}
			?>
				<tr>
					<th><?php echo $no++; ?></th>
					<th><?php echo $harga ?></th>
					<th><?php echo $diskon ?></th>
					<th><?php echo $total_harga ?></th>
				</tr>	
			<?php
				}
			?>
		</tbody>
	</table>
</body>
</html>