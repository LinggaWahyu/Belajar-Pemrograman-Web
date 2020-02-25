<!DOCTYPE html>
<html>
<head>
	<title>Nomor 2</title>
</head>
<body>
	<form action="nomor2.php" method="POST">
		<table>
			<tr>
				<td>Nilai Penjualan</td>
				<td><input type="text" name="nilai_penjualan"></td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="submit" value="Hitung">
				</td>
			</tr>
		</table>
	</form>
	<?php  
		$nilai = "";
		$diskon = "";
		$total = "";
		if (isset($_POST['submit'])) {
			$nilai = $_POST['nilai_penjualan'];
			if ($nilai >= 100000) {
				$diskon = "10%";
				$total = $nilai - ($nilai * (10/100));
			} else {
				$diskon = "5%";
				$total = $nilai - ($nilai * (5/100));
			}
		}
	?>
	<br>
	<p>Nilai Penjualan : <?php echo $nilai; ?></p>
	<p>Diskon : <?php echo $diskon; ?></p>
	<p>Total penjualan : <?php echo $total ?></p>
</body>
</html>