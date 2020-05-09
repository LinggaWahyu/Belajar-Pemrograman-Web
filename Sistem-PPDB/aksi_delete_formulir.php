<?php
	include "koneksi.php";

	$sql = "DELETE FROM formulir_pendaftaran WHERE id_siswa=" . $_GET['id_siswa'];
	$a = $koneksi->query($sql);

	if ($a == true) {
		$sql = "UPDATE siswa SET status_pendaftaran = 'Belum Mengisi Formulir', nomor_pendaftaran = null WHERE id_siswa=" . $_GET['id_siswa'];
		$b = $koneksi->query($sql);
		if ($b == true) {
			echo "<script>
				alert('Berhasil Menghapus Formulir !');
				window.location.href = 'daftar_siswa_mendaftar.php';
			</script>";
		}
	}
?>