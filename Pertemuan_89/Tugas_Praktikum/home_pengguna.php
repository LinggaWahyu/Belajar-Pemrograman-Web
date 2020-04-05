<!DOCTYPE html>
<html>
<head>
	<title>Home Pengguna</title>
</head>
<body>
		[<a href="aksi_logout.php">Logout</a>]
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
								<option value="<?php echo $c['kdbarang']; ?>"><?php echo $c['nama_barang']; ?></option>
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
			<tr>
			    <td></td>
			    <td>
					<p><b>Info Barang</b></p>
					<table border="1">
						<tr>
							<thead>
								<th>Kd Barang</th>
								<th>Nama Barang</th>
								<th>Stok</th>
							</thead>
						</tr>
						<tbody>
							<?php
								include "koneksi.php";
								$sql = "SELECT * FROM barang";
								$a = $koneksi->query($sql);

								while ($c = $a->fetch_array()) {
							?>
								<tr>
									<td><?php echo $c['kdbarang']; ?></td>
									<td><?php echo $c['nama_barang']; ?></td>
									<td><?php echo $c['stok']; ?></td>
								</tr>
							<?php		
								}
							?>
						</tbody>
					</table>
				</td>
			</tr>
		</table>
	</form>
	<br><br>

</body>
</html>