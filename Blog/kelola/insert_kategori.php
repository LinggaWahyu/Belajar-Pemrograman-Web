<?php
	include "function.php";

	$nama_kategori = $_POST['nama_kategori'];
	$keterangan = $_POST['keterangan'];

	$sql = "INSERT INTO tbl_kategori VALUES(null, '" . $nama_kategori . "', '" . $keterangan . "')";

	$hasil = insert($sql);

	if ($hasil) {
		echo "Kategori " . $nama_kategori . " Berhasil Disimpan !";
	}
?>