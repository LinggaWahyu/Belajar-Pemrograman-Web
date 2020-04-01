<?php
	include "koneksi.php";
	$harga = $_POST['harga'];
	$sql = "INSERT INTO tabel_harga VALUES (" . $harga . ")";

	$a = $koneksi->query($sql);

	if ($a == true) {
		header("location: viewdata.php");
	} else {
		echo "Error !";
	}
?>