<?php
	session_start();
	error_reporting(E_ALL^(E_NOTICE|E_WARNING));
	if (!isset($_SESSION['id_user']) && $_SESSION['level'] == "Admin") {
		die("Anda belum login");
	} else {
?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>Home Admin</title>
	</head>
	<body>
		<table>
			<tr>
				<td width="330px">
					<p><b>Form Input Barang</b></p>
					<form action="aksi_input_barang.php" method="POST">
						<table>
							<tr>
								<td>Nama Barang :</td>
								<td><input type="text" name="nama_barang"></td>
							</tr>
							<tr>
								<td>Stok Awal :</td>
								<td><input type="text" name="stok_awal"></td>
							</tr>
							<tr>
								<td><input type="submit" name="submit" value="Simpan"></td>
								<td><input type="reset" name="reset"></td>
							</tr>
						</table>
					</form>
				</td>
				<td width="550px">
					<p><b>Form Input Pembelian</b></p>
					<form action="aksi_pembelian.php" method="POST">
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
				</td>
			</tr>
			<tr height="70px"></tr>
			<tr>
				<td>
					<p><b>Info Barang</b></p>
					<table border="1">
						<tr>
							<thead>
								<th>Id Barang</th>
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
									<td><?php echo $c['id_barang']; ?></td>
									<td><?php echo $c['nama_barang']; ?></td>
									<td><?php echo $c['stok']; ?></td>
								</tr>
							<?php		
								}
							?>
						</tbody>
					</table>
				</td>
				<td valign="top">
					<p><b>Info Data Pembelian</b></p>
					<table border="1">
						<tr>
							<thead>
								<th>Id Pembelian</th>
								<th>Id User</th>
								<th>Tanggal</th>
								<th>Nama Barang</th>
								<th>Jumlah Barang</th>
							</thead>
						</tr>
						<tbody>
							<?php
								include "koneksi.php";
								$sql = "SELECT * FROM data_pembelian NATURAL JOIN barang";
								$a = $koneksi->query($sql);

								while ($c = $a->fetch_array()) {
							?>
								<tr>
									<td><?php echo $c['id_pembelian']; ?></td>
									<td><?php echo $c['id_user']; ?></td>
									<td><?php echo $c['tanggal']; ?></td>
									<td><?php echo $c['nama_barang']; ?></td>
									<td><?php echo $c['jumlah']; ?></td>
								</tr>
							<?php		
								}
							?>
						</tbody>
					</table>
				</td>
				<td valign="top">
					<p><b>Info Data Penjualan</b></p>
					<table border="1">
						<tr>
							<thead>
								<th>Id Penjualan</th>
								<th>Id User</th>
								<th>Tanggal</th>
								<th>Nama Barang</th>
								<th>Jumlah Barang</th>
							</thead>
						</tr>
						<tbody>
							<?php
								include "koneksi.php";
								$sql = "SELECT * FROM data_penjualan NATURAL JOIN barang";
								$a = $koneksi->query($sql);

								while ($c = $a->fetch_array()) {
							?>
								<tr>
									<td><?php echo $c['id_penjualan']; ?></td>
									<td><?php echo $c['id_user']; ?></td>
									<td><?php echo $c['tanggal']; ?></td>
									<td><?php echo $c['nama_barang']; ?></td>
									<td><?php echo $c['jumlah']; ?></td>
								</tr>
							<?php		
								}
							?>
						</tbody>
					</table>
				</td>
			</tr>
		</table>
		<br><br>
		[<a href="aksi_logout.php">Logout</a>]
	</body>
	</html>
<?php		
	}
?>
