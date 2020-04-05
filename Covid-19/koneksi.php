<?php
	$host = "localhost";
	$username = "root";
	$password = "";
	$database = "db_covid19";
	$koneksi = mysqli_connect($host, $username, $password, $database);

	if ($koneksi) {
		echo "";
	} else {
		echo "Server not connected";
	}
?>
