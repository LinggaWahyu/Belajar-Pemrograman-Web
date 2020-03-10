<!DOCTYPE html>
<html>
<head>
	<title>Insert Data</title>
</head>
<body>
	<form action="aksi_6.php" method="POST">
		<table>
			<tr>
				<td>Nama :</td>
				<td><input type="text" name="nama" required=""></td>
			</tr>
			<tr>
				<td>Email :</td>
				<td><input type="text" name="email" required=""></td>
			</tr>
			<tr>
				<td>Komentar :</td>
				<td><textarea name="komentar" required=""></textarea></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="SAVE"></td>
				<td><input type="reset" name="reset" value="CANCEL"></td>
			</tr>
		</table>
	</form>
</body>
</html>