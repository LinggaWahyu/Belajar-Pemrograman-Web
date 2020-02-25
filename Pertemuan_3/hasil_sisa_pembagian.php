<!DOCTYPE html>
<html>
	<head>
		<title>Nomor 1</title>
	</head>
	<body>
		<form action="hasil_sisa_pembagian.php" method="POST">
			<table>
				<tr>
					<td>Nilai 1</td>
					<td><input type="text" name="angka_pertama"></td>
				</tr>
				<tr>
					<td>Nilai  2</td>
					<td><input type="text" name="angka_kedua"></td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="submit" value="Sisa bagi">
					</td>
				</tr>
			</table>
		</form>
		<?php
			$a = "";
			$b = "";
			$c = "";
			if (isset($_POST['submit'])) {
				$a = $_POST['angka_pertama'];
				$b = $_POST['angka_kedua'];
				$c = $a % $b;
			}
		?>
		<br>
		<table border="1">
			<tr>
				<thead>
					<th>#</th>
					<th>Nilai Petama</th>
					<th>Nilai Kedua</th>
					<th>Hasil Bagi</th>
				</thead>
			</tr>
			<tr>
				<tbody>
					<th>#</th>
					<th><?php echo $a; ?></th>
					<th><?php echo $b; ?></th>
					<th><?php echo $c; ?></th>
				</tbody>
			</tr>
		</table>
	</body>
</html>