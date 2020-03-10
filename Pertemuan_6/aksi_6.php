<?php
	include "koneksi.php";
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$komentar = $_POST['komentar'];
	$sql = "INSERT INTO bukutamu (nama, email, komentar) VALUES ('" . $nama . "','" . $email . "','" . $komentar . "')";
	$a = $koneksi->query($sql);

	if ($a == true) {
		header('location: hasilbukutamu.php');
	} else {
		echo "Error !";
	}
?>