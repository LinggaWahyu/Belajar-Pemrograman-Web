<?php
	$host = "localhost";
	$username = "root";
	$password = "";
	$database = "db_tugas_prakweb89";
	$koneksi = mysqli_connect($host, $username, $password, $database);

	if ($koneksi) {
		echo "";
	} else {
		echo "Server not connected";
	}
?>
