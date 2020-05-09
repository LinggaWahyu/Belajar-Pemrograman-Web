<?php
	include "function.php";

	$id_kategori = $_POST['id'];

	$sql = "DELETE FROM tbl_kategori WHERE id_kategori = " . $id_kategori;

	$hasil = delete($sql);

	if ($hasil) {
		echo "Kategori berhasil di hapus !";
	}
?>