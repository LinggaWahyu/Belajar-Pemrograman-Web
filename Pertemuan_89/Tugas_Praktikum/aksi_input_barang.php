<?php
	include "koneksi.php";
	$nama_barang = $_POST['nama_barang'];
	$stok_awal = $_POST['stok_awal'];
	$harga = $_POST['harga'];

	$sql = "INSERT INTO barang VALUES (null, '" . $nama_barang . "', " . $stok_awal . ", '" . $harga . "')";

	$a = $koneksi->query($sql);

	if ($a == true) {
		echo "<script>
				alert('Input Barang Sukses');
				window.location.href = 'home_admin.php';
			</script>";
	} else {
		echo "<script>
				alert('Input Barang Gagal');
				window.location.href = 'home_admin.php';
			</script>";
	}
?>