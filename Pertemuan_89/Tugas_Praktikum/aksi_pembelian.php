<?php
	session_start();
	include "koneksi.php";
	$id_barang = $_POST['id_barang'];
	$jumlah = $_POST['jumlah'];
	$sql = $sql = "INSERT INTO jualbeli VALUES (null, " . $id_barang . ", '" . "jual" . "', " . $jumlah . ")";

	$a = $koneksi->query($sql);

	if ($a == true) {
		echo "<script>
				alert('Input Pembelian Barang Sukses');
				window.location.href = 'home_admin.php';
			</script>";
	} else {
		echo "<script>
				alert('Input Pembelian Barang Gagal');
				window.location.href = 'home_admin.php';
			</script>";
	}
?>