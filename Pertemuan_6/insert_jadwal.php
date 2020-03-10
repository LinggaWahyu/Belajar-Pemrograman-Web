<?php
	include "koneksi.php";
	$hari = $_POST['hari'];
	$jam = $_POST['jam'];
	$ruang = $_POST['ruang'];
	$matkul = $_POST['matkul'];

	$a = "SELECT id_matkul FROM matkul WHERE nm_matkul = '" . $matkul . "'";
	$b = $koneksi->query($a);
	while ($hasil = mysqli_fetch_array($b)) {
		$id_matkul = $hasil['id_matkul'];
	}

	$sql = "INSERT INTO jadwal (id_matkul, hari, jam, ruang) VALUES (" . $id_matkul . ", '" . $hari . "', '" . $jam . "', '" . $ruang . "')";
	$c = $koneksi->query($sql);
	if ($c == true) {
		header("location: jadwalkuliah.php");
	} else {
		echo "Error !";
	}
?>