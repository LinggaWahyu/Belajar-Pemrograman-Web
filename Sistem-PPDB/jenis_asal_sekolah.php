<?php
	include "koneksi.php";

	$sql = "SELECT * FROM jenis_asal_sekolah WHERE kd_tingkat_kelas = '" . $_POST['kd_tingkat'] . "'";
	$a = $koneksi->query($sql);

	$output = "<option selected disabled>-Pilih Jenis Sekolah-</option>";
	while ($c = $a->fetch_array()) {
		$output .= '<option value="' . $c['id_jenis_asal_sekolah'] . '">' . $c['nama_asal_sekolah'] . '</option>';
	}

	echo $output;
?>