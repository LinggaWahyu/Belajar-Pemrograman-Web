<?php
	$user = $_GET['username'];
	$pass = $_GET['password'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Hasil Login</title>
</head>
<body>
	<table border="1">
		<tr>
			<thead>
				<th>Username</th>
				<th>Password</th>
			</thead>
		</tr>
		<tr>
			<tbody>
				<th><?php echo $user; ?></th>
				<th><?php echo $pass; ?></th>
			</tbody>
		</tr>
	</table>
</body>
</html>