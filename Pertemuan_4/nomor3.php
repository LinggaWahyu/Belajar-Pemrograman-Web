<!DOCTYPE html>
<html>
<head>
	<title>Nomor 3</title>
</head>
<body>
	<form action="nomor3_hasil.php" method="POST">
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><textarea name="alamat"></textarea></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>
					<input type="radio" name="jk" value="Cowok">Cowok
					<input type="radio" name="jk" value="Cewe">Cewek
				</td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>Hitung</td>
				<?php
					$angka1 = rand(1,10);
					$angka2 = rand(1,10);

					setcookie("angka1", $angka1);
					setcookie("angka2", $angka2);
				?>
				<td><?php echo $angka1 . " * " . $angka2; ?></td>
			</tr>
			<tr>
				<td>Jawab</td>
				<td><input type="text" name="jawaban"></td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="submit" value="Simpan">
					<input type="reset" name="reset" value="batal">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>