<?php
	session_start();
	if ($_SESSION['nama_lengkap'] == null) {
		echo "<script>
				alert('Silahkan Login Terlebih Dahulu !');
				window.location.href = 'index.html';
			</script>";
	}
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
	<title>Home Admin PPDB Madrasah ABC</title>
</head>
<body class="bg-light">
	<div class="container mt-5">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		    <a class="navbar-brand">PPDB Madrasah ABC</a>
	
		    <div class="collapse navbar-collapse" id="navbarSupportedContent">
		     	<ul class="navbar-nav mr-auto"></ul>
		   		<a style="margin-right: 30px;">Hai, 
		   			<?php
		   				echo "<b>" . $_SESSION['nama_lengkap'] . "</b>";
		   			?>
		   		</a>  
		    	<a href="aksi_login.php?op=out" class="btn btn-outline-danger">Logout</a>
		   	</div>
		</nav>
		<div class="row">
			<div class="col-md-3">
				<ul class="list-group" style="margin-top: 40px;">
					<li class="list-group-item"><a href="home_admin.php">Menu Utama</a></li>
					<li class="list-group-item"><a href="daftar_siswa_mendaftar.php">Daftar Siswa yang Mendaftar</a></li>
					<li class="list-group-item list-group-item-success"><a href="#">Detail Siswa</a></li>
					<li class="list-group-item" style="margin-top: 20px;">
						<form action="export_excel.php" method="POST">
                			<input type="submit" class="btn btn-success btn-block" value="Excel Daftar Siswa" name="cetak_form">
            			</form>
					</li>
				</ul>
			</div>
			<div class="col-md-9">
				<div class="card" style="margin-top: 40px;">
					<div class="card-header">
						<b>Detail Data Diri Siswa</b>
					</div>
				    <div class="card-body">
				    	<table class="table table-borderless table-striped">
				    		<?php
				    			include "koneksi.php";
				    			$data = array('No. Pendaftaran', 'Nama Siswa', 'NISM', 'NISN', 'Status Siswa', 'NIK', 'Tempat Lahir', 'Tanggal Lahir', 'Jenis Kelamin', 'Agama', 'Hobi', 'Cita-Cita', 'Jumlah Saudara', 'Tanggal Masuk', 'Tahun Ajaran', 'Anak Ke', 'Tingkat Kelas', 'Kelas Paralel', 'Jenis Asal Sekolah', 'NPSN Sekolah Asal', 'Nama Sekolah Asal', 'Alamat Sekolah Asal');
				    			$sql = "SELECT nomor_pendaftaran, nama_siswa, NISM, NISN, status_siswa, NIK, tempat_lahir, tanggal_lahir, nama_jk, nama_agama, nama_hobi, nama_cita_cita, jumlah_saudara, tanggal_masuk, tahun_ajaran, anak_ke, nama_tingkat_kelas, nama_kelas_paralel, nama_asal_sekolah, NPSN_sekolah_asal, nama_sekolah_asal, alamat_sekolah_asal FROM formulir_pendaftaran NATURAL JOIN siswa NATURAL JOIN jenis_kelamin NATURAL JOIN agama NATURAL JOIN hobi NATURAL JOIN `cita-cita` NATURAL JOIN tingkat_kelas NATURAL JOIN kelas_paralel NATURAL JOIN jenis_asal_sekolah WHERE id_siswa = " . $_GET['id_siswa'] . " AND formulir_pendaftaran.kd_jk = jenis_kelamin.kd_jk AND formulir_pendaftaran.kd_agama = agama.kd_agama AND formulir_pendaftaran.kd_hobi = hobi.kd_hobi AND formulir_pendaftaran.kd_cita_cita =" . " `cita-cita`.`kd_cita_cita` AND formulir_pendaftaran.kd_tingkat_kelas = tingkat_kelas.kd_tingkat_kelas AND formulir_pendaftaran.kd_kelas_paralel = kelas_paralel.kd_kelas_paralel AND formulir_pendaftaran.id_jenis_asal_sekolah = jenis_asal_sekolah.id_jenis_asal_sekolah";
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
				</div>
			</div>
		</div>
		<div class="text-center" style="margin-top: 30px">
            <p>Copyright &#169; 2020 by <a href="http://linggawahyu.github.io" target="_blank">Lingga Wahyu Rochim</a></p>
        </div> 
	</div>

	<script src="assets/js/jquery.js"></script> 
    <script src="assets/js/popper.js"></script> 
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>