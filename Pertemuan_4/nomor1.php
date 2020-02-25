<!DOCTYPE html>
<html>
<head>
	<title>Nomor 1</title>
</head>
<body>
	<form action="nomor1.php" method="POST">
		<table>
			<tr>
				<td>Tarif</td>
				<td><input type="text" name="tarif"></td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="submit" value="Cek Hotel">
				</td>
			</tr>
		</table>
	</form>
	<?php  
		$tarif = "";
		$hotel = "";
		if (isset($_POST['submit'])) {
			$tarif = $_POST['tarif'];
			if ($tarif >= 150000 && $tarif <= 250000) {
				$hotel = "Kelas hotel anda adalah Melati";
			} else if ($tarif >= 250000 && $tarif <= 500000) {
				$hotel = "Kelas hotel anda adalah Deluxe";
			} else if ($tarif >= 500000 && $tarif <= 1000000) {
				$hotel = "Kelas hotel anda adalah Superior";
			} else if ($tarif >= 1000000 && $tarif <= 5000000) {
				$hotel = "Kelas hotel anda adalah President";
			} else {
				$hotel = "Maaf, untuk kelas hotel sesuai dengan tarif anda masih belum tersedia";
			}
		}
	?>
	<br>
	<p>Tarif : <?php echo $tarif; ?></p>
	<p><?php echo $hotel; ?></p>
</body>
</html>