<?php
	include "koneksi.php";

	$sql = "SELECT * FROM kelas_paralel WHERE nama_kelas_paralel LIKE '" . $_POST['kd_tingkat'] . "-%'";
	$a = $koneksi->query($sql);

	$output = "<option selected disabled>-Pilih Kelas Paralel-</option>";
	while ($c = $a->fetch_array()) {
		$output .= '<option value="' . $c['kd_kelas_paralel'] . '">' . $c['nama_kelas_paralel'] . '</option>';
	}

	echo $output;
?>