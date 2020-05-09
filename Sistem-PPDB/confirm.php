<?php
	include "koneksi.php";
	$email = $_GET['email'];

	$query = "UPDATE siswa SET keterangan = 'Aktif' WHERE email = '" . $email . "'";
	$a = $koneksi->query($query);

	if ($a == true) {
		echo "<script>
				alert('Akun Anda Sekarang Sudah Atif, Silahkan Login untuk Melakukan Pendaftaran !');
				window.location.href = 'index.html';
			</script>";
	} else {
		echo "<script>
				alert('Gagal Aktivasi Akun, Silahkan Register Kembali !');
				window.location.href = 'register.html';
			</script>";
	}
?>