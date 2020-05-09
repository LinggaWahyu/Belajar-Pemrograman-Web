<?php
	include "function.php";

	$id_kategori = $_POST['update_id_kategori'];
	$nama_kategori = $_POST['update_nama_kategori'];
	$keterangan = $_POST['update_keterangan'];

	$sql = "UPDATE tbl_kategori SET nama_kategori = '" . $nama_kategori . "', keterangan = '" . $keterangan . "' WHERE id_kategori = " . $id_kategori;

	$hasil = update($sql);

	if ($hasil == true) {
		echo "Kategori " . $nama_kategori . " Berhasil di Update !";
	}
?>