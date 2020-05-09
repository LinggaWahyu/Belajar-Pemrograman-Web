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
    <script src="assets/js/jquery.js"></script>
    <link rel="stylesheet" href="assets/css/bootstrap.css"> 
    <script src="assets/js/bootstrap.min.js"></script>

    <link rel="icon" href="img/icon.png">
	<title>Form Pendaftaran PPDB Madrasah ABC</title>

	<script>
		$(document).ready(function() {
			$('#tingkat').change(function() {
				var tingkat = $(this).val();
				$.ajax({
					type: 'POST',
					url: 'jenis_asal_sekolah.php',
					data: {kd_tingkat:tingkat},
					dataType:"text",
					success: function(data) {
						$('#jenis_asal_sekolah').html(data);
					}
				});
				$.ajax({
					type: 'POST',
					url: 'kelas_paralel.php',
					data: {kd_tingkat:tingkat},
					dataType:"text",
					success: function(data) {
						$('#kelas_paralel').html(data);
					}
				});
			});
		});
	</script>
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
					<li class="list-group-item"><a href="home_siswa.php">Menu Utama</a></li>
					<li class="list-group-item list-group-item-success"><a href="#">Isi Formulir Pendaftaran</a></li>
					<li class="list-group-item"><a href="lihat_data_diri.php">Lihat Data Diri</a></li>
					<li class="list-group-item" style="margin-top: 20px;">
						<form action="cetak_form.php" method="POST">
                			<input type="submit" class="btn btn-info btn-block" value="Cetak Formulir" name="cetak_form">
            			</form>
					</li>
				</ul>
			</div>
			<div class="col-md-9">
				<div class="card" style="margin-top: 40px;">
					<div class="card-header">
						<b>Isi Formulir Pendaftaran</b>
					</div>
					<?php
						include "koneksi.php";
						$sql = "SELECT * FROM siswa WHERE status_pendaftaran = 'Sudah Mengisi Formulir' AND id_siswa = " . $_SESSION['id_siswa'];
						$a = $koneksi->query($sql);

						if (mysqli_num_rows($a) == 0) {
					?>
				    <div class="card-body">
				    	<form action="aksi_input_formulir.php" method="POST">
				    		<table class="table table-borderless table-sm" width="100%">
				    			<tr>
				    				<td width="47%">
				    					<b>Nama Siswa</b><br>
				    					<div class="form-group">
                    						<input type="text" class="form-control" name="nama_siswa" required>
                						</div>
				    				</td>
				    				<td></td>
				    				<td>
				    					<b>Cita-Cita</b><br>
				    					<div class="form-group">
                    						<select class="form-control" name="cita_cita" required>
                    							<option selected disabled>-Pilih Cita-Cita-</option>
                    							<?php
                    								include "koneksi.php";
                    								$sql = "SELECT * FROM `cita-cita`";
                    								$a = mysqli_query($koneksi, $sql);
                    								while ($c = $a->fetch_array()) {
                    							?>
                    							<option value="<?php echo $c['kd_cita_cita']; ?>"><?php echo $c['nama_cita_cita']; ?></option>
                    							<?php
                    								}
                    							?>
                    						</select>
                						</div>
				    				</td>
				    			</tr>
								<tr>
									<td>
										<b>NISM</b><br>
										<div class="form-group">
                    						<input type="text" class="form-control" name="nism" required>
                						</div>
									</td>
									<td></td>
									<td>
										<b>Jumlah Saudara</b><br>
										<div class="form-group">
                    						<input type="text" class="form-control" name="jumlah_saudara" required>
                						</div>
									</td>
								</tr>
								<tr>
									<td>
										<b>NISN</b><br>
										<div class="form-group">
                    						<input type="text" class="form-control" name="nisn" required>
                						</div>
									</td>
									<td></td>
									<td>
										<b>Tingkat</b><br>
				    					<div class="form-group">
                    						<select class="form-control" name="tingkat" id="tingkat" required>
                    							<option selected disabled>-Pilih Tingkat-</option>
                    							<?php
                    								include "koneksi.php";
                    								$sql = "SELECT * FROM `tingkat_kelas`";
                    								$a = mysqli_query($koneksi, $sql);
                    								while ($c = $a->fetch_array()) {
                    							?>
                    							<option value="<?php echo $c['kd_tingkat_kelas']; ?>"><?php echo $c['nama_tingkat_kelas']; ?></option>
                    							<?php
                    								}
                    							?>
                    						</select>
                						</div>
									</td>
								</tr>
								<tr>
									<td>
										<b>NIK</b><br>
										<div class="form-group">
                    						<input type="text" class="form-control" name="nik" required>
                						</div>
									</td>
									<td></td>
									<td>
										<b>Jenis Asal Sekolah</b><br>
										<div class="form-group">
                    						<select class="form-control" name="jenis_asal_sekolah" id="jenis_asal_sekolah" required>
                    							<option selected disabled>-Pilih Jenis Asal Sekolah-</option>
                    						</select>
                						</div>
									</td>
								</tr>
								<tr>
									<td>
										<b>Tempat Lahir</b><br>
										<div class="form-group">
                    						<input type="text" class="form-control" name="tempat_lahir" required>
                						</div>
									</td>
									<td></td>
									<td>
										<b>Kelas Paralel</b><br>
										<div class="form-group">
                    						<select class="form-control" name="kelas_paralel" id="kelas_paralel" required>
                    							<option selected disabled>-Pilih Kelas Paralel-</option>
                    						</select>
									</td>
								</tr>
								<tr>
									<td>
										<b>Tanggal Lahir</b><br>
										<div class="form-group">
                    						<input type="date" class="form-control" name="tanggal_lahir" required>
                						</div>
									</td>
									<td></td>
									<td>
										<b>Anak Ke-</b><br>
										<div class="form-group">
                    						<input type="text" class="form-control" name="anak_ke" required>
                						</div>
									</td>
								</tr>
								<tr>
									<td>
										<b>Jenis Kelamin</b><br>
				    					<div class="form-group">
                    						<select class="form-control" name="jenis_kelamin" id="jenis_kelamin" required>
                    							<option selected disabled>-Pilih Jenis Kelamin-</option>
                    							<?php
                    								include "koneksi.php";
                    								$sql = "SELECT * FROM `jenis_kelamin`";
                    								$a = mysqli_query($koneksi, $sql);
                    								while ($c = $a->fetch_array()) {
                    							?>
                    							<option value="<?php echo $c['kd_jk']; ?>"><?php echo $c['nama_jk']; ?></option>
                    							<?php
                    								}
                    							?>
                    						</select>
                						</div>
									</td>
									<td></td>
									<td>
										<b>NPSN Sekolah Asal</b><br>
										<div class="form-group">
                    						<input type="text" class="form-control" name="npsn_sekolah_asal" required>
                						</div>
									</td>
								</tr>
								<tr>
									<td>
										<b>Agama</b><br>
				    					<div class="form-group">
                    						<select class="form-control" name="agama" id="agama" required>
                    							<option selected disabled>-Pilih Agama-</option>
                    							<?php
                    								include "koneksi.php";
                    								$sql = "SELECT * FROM `agama`";
                    								$a = mysqli_query($koneksi, $sql);
                    								while ($c = $a->fetch_array()) {
                    							?>
                    							<option value="<?php echo $c['kd_agama']; ?>"><?php echo $c['nama_agama']; ?></option>
                    							<?php
                    								}
                    							?>
                    						</select>
                						</div>
									</td>
									<td></td>
									<td>
										<b>Nama Sekolah Asal</b><br>
										<div class="form-group">
                    						<input type="text" class="form-control" name="nama_sekolah_asal" required>
                						</div>
									</td>
								</tr>
								<tr>
									<td>
										<b>Hobi</b><br>
				    					<div class="form-group">
                    						<select class="form-control" name="hobi" id="hobi" required>
                    							<option selected disabled>-Pilih Hobi-</option>
                    							<?php
                    								include "koneksi.php";
                    								$sql = "SELECT * FROM `hobi`";
                    								$a = mysqli_query($koneksi, $sql);
                    								while ($c = $a->fetch_array()) {
                    							?>
                    							<option value="<?php echo $c['kd_hobi']; ?>"><?php echo $c['nama_hobi']; ?></option>
                    							<?php
                    								}
                    							?>
                    						</select>
                						</div>
									</td>
									<td></td>
									<td>
										<b>Alamat Sekolah Asal</b><br>
										<div class="form-group">
                    						<textarea name="alamat_sekolah_asal" class="form-control"></textarea>
                						</div>
									</td>
								</tr>
								<tr>
									<td colspan="3">
										<input type="submit" class="btn btn-success btn-block" value="Daftar" name="daftar">
									</td>
								</tr>				    			
				    		</table>
				    	</form>
				    </div>
				    <?php
				    	} else {
				    ?>
				    	<div class="card-body">
				    		<p>Anda Sudah Mengisi Formulir Pendaftaran, Silahkan Cek Data Diri Anda</p>
				    	</div>
				    <?php		
				    	}
				    ?>  
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