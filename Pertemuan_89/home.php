<?php
	session_start();
	include "koneksi.php";
	error_reporting(E_ALL^(E_NOTICE|E_WARNING));
	if (!isset($_SESSION['username'])) {
		die("Anda belum login");
	}

	$username = $_SESSION['username'];
	$level = $_SESSION['level'];

	if ($level == "Admin") {
		echo "Anda sebagai " . $level;
	} else if ($level == "Mahasiswa") {
		echo "Anda sebagai " . $level;
	} else if ($level == "Dosen") {
		echo "Anda sebagai " . $level;
	}	
?>