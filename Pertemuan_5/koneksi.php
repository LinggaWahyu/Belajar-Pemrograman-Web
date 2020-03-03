<html>
	<head>
		<title>Koneksi Database MySQL</title>
	</head>
	<body>
		<?php
			$host = "localhost";
			$username = "root";
			$password = "";
			$database = "db_akademik";
			$koneksi = mysqli_connect($host, $username, $password, $database);

			//if ($koneksi) {
			//	echo "OK";
			//} else {
			//	echo "Server not connected";
			//}
		?>
	</body>
</html>