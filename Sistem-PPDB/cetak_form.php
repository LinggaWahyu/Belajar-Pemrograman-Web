<?php
	session_start();
	include "koneksi.php";
		$sql = "SELECT * FROM siswa WHERE status_pendaftaran = 'Sudah Mengisi Formulir' AND id_siswa = " . $_SESSION['id_siswa'];
		$a = $koneksi->query($sql);

		if (mysqli_num_rows($a) == 1) {

		
?>

<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css"> 
    <script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>

    <!-- My CSS -->
    <style>
      section {
        min-height: 250px;
      }
    </style>
    
    <link rel="icon" href="img/icon.png">
	<title>Data Diri Siswa PPDB Madrasah ABC</title>
</head>
<body>
	<div class="container mt-5">
		<h3 style="text-align: center;">Formulir Pendaftaran PPDB Madrasah ABC</h3>
		<div class="card" style="margin-top: 40px;">
					<?php
						include "koneksi.php";
						$sql = "SELECT * FROM siswa WHERE status_pendaftaran = 'Sudah Mengisi Formulir' AND id_siswa = " . $_SESSION['id_siswa'];
						$a = $koneksi->query($sql);

						if (mysqli_num_rows($a) == 1) {
					?>
				    <div class="card-body">
				    	<table class="table table-borderless">
				    		<?php
				    			include "koneksi.php";
				    			$data = array('No. Pendaftaran', 'Nama Siswa', 'NISM', 'NISN', 'Status Siswa', 'NIK', 'Tempat Lahir', 'Tanggal Lahir', 'Jenis Kelamin', 'Agama', 'Hobi', 'Cita-Cita', 'Jumlah Saudara', 'Tanggal Masuk', 'Tahun Ajaran', 'Anak Ke', 'Tingkat Kelas', 'Kelas Paralel', 'Jenis Asal Sekolah', 'NPSN Sekolah Asal', 'Nama Sekolah Asal', 'Alamat Sekolah Asal');
				    			$sql = "SELECT nomor_pendaftaran, nama_siswa, NISM, NISN, status_siswa, NIK, tempat_lahir, tanggal_lahir, nama_jk, nama_agama, nama_hobi, nama_cita_cita, jumlah_saudara, tanggal_masuk, tahun_ajaran, anak_ke, nama_tingkat_kelas, nama_kelas_paralel, nama_asal_sekolah, NPSN_sekolah_asal, nama_sekolah_asal, alamat_sekolah_asal FROM formulir_pendaftaran NATURAL JOIN siswa NATURAL JOIN jenis_kelamin NATURAL JOIN agama NATURAL JOIN hobi NATURAL JOIN `cita-cita` NATURAL JOIN tingkat_kelas NATURAL JOIN kelas_paralel NATURAL JOIN jenis_asal_sekolah WHERE id_siswa = " . $_SESSION['id_siswa'] . " AND formulir_pendaftaran.kd_jk = jenis_kelamin.kd_jk AND formulir_pendaftaran.kd_agama = agama.kd_agama AND formulir_pendaftaran.kd_hobi = hobi.kd_hobi AND formulir_pendaftaran.kd_cita_cita =" . " `cita-cita`.`kd_cita_cita` AND formulir_pendaftaran.kd_tingkat_kelas = tingkat_kelas.kd_tingkat_kelas AND formulir_pendaftaran.kd_kelas_paralel = kelas_paralel.kd_kelas_paralel AND formulir_pendaftaran.id_jenis_asal_sekolah = jenis_asal_sekolah.id_jenis_asal_sekolah";
				    			$a = $koneksi->query($sql);
				    			$index = 0;

				    			$c = $a->fetch_array();
				    			for ($i = 0; $i < count($data); $i++) {
				    		?>
				    			<tr>
					    			<td width="35%"><?php echo $data[$index]; ?></td>
					    			<td width="5%">:</td>
					    			<td><?php echo $c[$index]; ?></td>
					    		</tr>
				    		<?php
				    			$index++;
				    			}
				    			$index = 0;
				    		?>
				    	</table>
				    </div>
				    <?php
				    	} else {
				    ?>
				    	<div class="card-body">
				    		<p>Anda Belum Mengisi Formulir Pendaftaran</p>
				    	</div>
				    <?php		
				    	}
				    ?> 
				</div>
	</div>
	<script>
		window.onload = function() { window.print(); }
	</script>
</body>
</html>

<?php
	} else {
		echo "<script>
				alert('Anda Belum Mengisi Formulir Pendaftaran !');
				window.location.href = 'form_pendaftaran.php';
			</script>";
	}
?>