<!DOCTYPE html>
<html>
	<head>
		<title>Nomor 2</title>
	</head>
	<body>
		FORM KELILING LINGKARAN
		<form action="hasil_keliling_lingkaran.php" method="POST">
			<table>
				<tr>
					<td>Nilai jari-jari (r)</td>
					<td><input type="text" name="jari_jari"></td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="submit" value="Hitung keliling lingkaran">
					</td>
				</tr>
			</table>
		</form>
		<?php
			
			$a = "";
			$phi = 3.14;
			$keliling_lingkaran = "";
			if (isset($_POST['submit'])) {
				$a = $_POST['jari_jari'];
				$keliling_lingkaran = $phi * 2 * $a;
			}
		?>
		<br>
		<table border="1">
			<tr>
				<thead>
					<th>#</th>
					<th>Nilai Jari-Jari</th>
					<th>Nilai Phi</th>
					<th>Keliling Lingkaran</th>
				</thead>
			</tr>
			<tr>
				<tbody>
					<th>#</th>
					<th><?php echo $a; ?></th>
					<th><?php echo $phi; ?></th>
					<th><?php echo $keliling_lingkaran; ?></th>
				</tbody>
			</tr>
		</table>
	</body>
</html>