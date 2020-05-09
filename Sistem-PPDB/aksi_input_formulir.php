<?php
	session_start();
	include "koneksi.php";

	$nsm_sekolah = "123456789101";
	$npsn_sekolah = "12345678";
	$status_siswa = "Siswa Baru";
	$tanggal_masuk = "2020-08-01";
	$tahun_ajaran = "2019-2020";

	$sql = "INSERT INTO formulir_pendaftaran VALUES(null, " . $_SESSION['id_siswa'] . ", '" . $_POST['nism'] . "', '" . $npsn_sekolah . "', '" . $status_siswa . "', '" . $_POST['nama_siswa'] . "', '" . $nsm_sekolah . "', '" . $_POST['nisn'] . "', '" . $_POST['nik'] . "', '" . $_POST['tempat_lahir'] . "', '" . $_POST['tanggal_lahir'] . "', " . $_POST['jenis_kelamin'] . ", " . $_POST['agama'] . ", " . $_POST['hobi'] . ", " . $_POST['cita_cita'] . ", " . $_POST['anak_ke'] . ", " . $_POST['jumlah_saudara'] . ", '" . $tanggal_masuk . "', '" . $tahun_ajaran . "', '" . $_POST['tingkat'] . "', " . $_POST['kelas_paralel'] . ", " . $_POST['jenis_asal_sekolah'] . ", '" . $_POST['npsn_sekolah_asal'] . "', '" . $_POST['nama_sekolah_asal'] . "', '" . $_POST['alamat_sekolah_asal'] . "')";

	$a = $koneksi->query($sql);

	if ($a == true) {
		$nomor_pendaftaran = $_SESSION['id_siswa'] . "2020" . rand(100, 999);
		$sql = "UPDATE siswa SET status_pendaftaran = 'Sudah Mengisi Formulir', nomor_pendaftaran = " . $nomor_pendaftaran . " WHERE id_siswa = " . $_SESSION['id_siswa'];

		$b = $koneksi->query($sql);
		if ($b == true) {
		  	echo "<script>
				alert('Pendaftaran Berhasil !');
				window.location.href = 'form_pendaftaran.php';
			</script>";
		  }  
	}
?>