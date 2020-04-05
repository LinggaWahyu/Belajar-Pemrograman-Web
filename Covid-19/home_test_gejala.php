<!DOCTYPE html>
<html>
<head>
	<title>Test Gejala</title>
</head>
<body>
	<form action="act_ngetest.php" method="POST">
		<table>
			<tr>
				<thead>
					<th>Jenis</th>
					<th>Pertanyaan</th>
					<th>Jawab</th>
					<th>Keterangan</th>
				</thead>
			</tr>
			<tbody>
				<?php
					include "koneksi.php";
					$sql = "SELECT * FROM gejala";
					$a = $koneksi->query($sql);

					while ($c = $a->fetch_array()) {
				?>
					<tr>
						<td align="center"><?php echo $c['kode']; ?></td>
						<td style="padding: 20px;" width="900px"><?php echo $c['nmgejala'], "<br>", $c['keterangan']; ?></td>
						<td><input type="radio" name="<?php echo "jawab_", $c['idgejala']; ?>" value = "Ya">Ya<input type="radio" name="<?php echo "jawab_", $c['idgejala']; ?>" value = "Tidak">Tidak</td>
						<td style="padding: 20px;"><textarea name="<?php echo "ket_", $c['idgejala']; ?>"></textarea></td>
					</tr>
				<?php
					}
				?>
				<tr>
					<td><input type="submit" name="check_gejala" value="Check"></td>
					<td><input type="reset" name="reset"></td>
				</tr>
			</tbody>	
		</table>
	</form>
</body>
</html>