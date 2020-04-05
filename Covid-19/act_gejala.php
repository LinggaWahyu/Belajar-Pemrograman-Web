<?php
	include "koneksi.php";

	$kode = $_POST['kode'];
	$nama = $_POST['nama_gejala'];
	$ket = $_POST['keterangan'];
	$jenis = $_POST['jenis'];

	$sql = "INSERT INTO gejala VALUES(null, '" . $kode . "', '" . $nama . "', '" . $ket . "', '" .  $jenis . "')";
	$a = $koneksi->query($sql);

	if ($a == true) {
		echo "<script>
				alert('Input Gejala/Resiko Sukses');
				window.location.href = 'home_test_gejala.php';
			</script>";		
	} else {
		echo "Error";
	}

?>