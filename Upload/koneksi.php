<?php
	$host = "localhost";
	$username = "root";
	$password = "";		
	$database = "db_upload";
	$koneksi = mysqli_connect($host, $username, $password, $database);

	if ($koneksi) {
		echo "OK";
	} else {
		echo "Server not connected";
	}
?>