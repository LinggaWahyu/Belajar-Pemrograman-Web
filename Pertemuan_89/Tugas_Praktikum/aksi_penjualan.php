<?php
	session_start();
	include "koneksi.php";
	$id_barang = $_POST['id_barang'];
	$jumlah = $_POST['jumlah'];
	$id_user = $_SESSION['id_user'];
	$tanggal = date("Y") . "-" . date("m") . "-" . date("d");

	$sql = "INSERT INTO data_penjualan VALUES (null, " . $id_user . ", '" . $tanggal . "', " . $id_barang . ", " . $jumlah . ")";
	$a = $koneksi->query($sql);

	if ($a == true) {
		echo "<script>
				alert('Input Penjualan Barang Sukses');
				window.location.href = 'home_pengguna.php';
			</script>";
	} else {
		echo "<script>
				alert('Input Penjualan Barang Gagal');
				window.location.href = 'home_pengguna.php';
			</script>";
	}
?>