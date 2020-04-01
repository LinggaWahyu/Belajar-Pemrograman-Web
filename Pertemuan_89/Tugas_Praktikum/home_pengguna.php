<!DOCTYPE html>
<html>
<head>
	<title>Home Pengguna</title>
</head>
<body>
	<p><b>Input Data Penjualan</b></p>
	<form action="aksi_penjualan.php" method="POST">
		<table>
			<tr>
				<td>Nama Barang :</td>
				<td>
					<select name="id_barang">
						<?php
							include "koneksi.php";
							$sql = "SELECT * FROM barang";
							$a = $koneksi->query($sql);
							while ($c = $a->fetch_array()) {
						?>
								<option value="<?php echo $c['id_barang']; ?>"><?php echo $c['nama_barang']; ?></option>
						<?php		
							}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Jumlah Barang :</td>
				<td><input type="text" name="jumlah"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit"></td>
				<td><input type="reset" name="reset"></td>
			</tr>
		</table>
	</form>
	<br><br>
	[<a href="aksi_logout.php">Logout</a>]
</body>
</html>