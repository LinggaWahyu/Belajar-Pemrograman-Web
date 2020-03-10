<!DOCTYPE html>
<html>
<head>
	<title>Form Jadwal</title>
</head>
<body>
	<form action="insert_jadwal.php" method="POST">
		<table>
			<tr>
				<td>Hari :</td>
				<td>
					<select name="hari">
						<option value="Senin">Senin</option>
						<option value="Selasa">Selasa</option>
						<option value="Rabu">Rabu</option>
						<option value="Kamis">Kamis</option>
						<option value="Jum'at">Jum'at</option>
						<option value="Sabtu">Sabtu</option>
						<option value="Minggu">Minggu</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Jam :</td>
				<td><input type="text" name="jam"></td>
			</tr>
			<tr>
				<td>Ruang :</td>
				<td><input type="text" name="ruang"></td>
			</tr>
			<tr>
				<td>Mata Kuliah :</td>
				<td>
					<select name="matkul"> 
				<?php
					include "koneksi.php";
					$sql = "SELECT nm_matkul FROM matkul";
					$hasil = mysqli_query($koneksi, $sql);
					while ($c = mysqli_fetch_array($hasil)) { 
				?>
					<option value="<?php echo $c['nm_matkul']; ?>"><?php echo $c['nm_matkul']; ?></option>
				<?php
					}
				?>
					</select>
				</td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="SAVE"></td>
				<td><input type="reset" name="reset" value="CANCEL"></td>
			</tr>
		</table>
	</form>
</body>
</html>