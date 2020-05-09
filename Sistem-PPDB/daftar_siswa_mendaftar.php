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
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<link rel="stylesheet" href="assets/css/bootstrap.css"> 
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"> 
	
	<link rel="icon" href="img/icon.png">
	<title>Daftar Siswa Mendaftar PPDB Madrasah ABC</title>

	<script>
		$(document).ready(function() {
		    $('#daftar_siswa').DataTable();
		} );
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
					<li class="list-group-item"><a href="home_admin.php">Menu Utama</a></li>
					<li class="list-group-item list-group-item-success"><a href="#">Daftar Siswa yang Mendaftar</a></li>
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
						<b>Daftar Siswa yang Mendaftar</b>
					</div>
				    <div class="card-body">
				    	<table class="table" id="daftar_siswa" style="width:100%">
				    		<thead>
				    			<tr>
				    				<th>No. Pendaftaran</th>
				    				<th>NISN</th>
				    				<th>Nama Siswa</th>
				    				<th>Sekolah Asal</th>
				    				<th>Aksi</th>
				    			</tr>
				    		</thead>
				    		<tbody>
				    			<?php
				    				include "koneksi.php";
				    				$sql = "SELECT * FROM formulir_pendaftaran NATURAL JOIN siswa WHERE formulir_pendaftaran.id_siswa = siswa.id_siswa";
				    				$a = $koneksi->query($sql);

				    				while ($c = $a->fetch_array()) {
				    			?>
				    			<tr>
					    			<td><?php echo $c['nomor_pendaftaran']; ?></td>
					    			<td><?php echo $c['NISN']; ?></td>
					    			<td><?php echo $c['nama_siswa']; ?></td>
					    			<td><?php echo $c['nama_sekolah_asal']; ?></td>
					    			<td>
					    				<a href="detail_siswa.php?id_siswa=<?php echo $c['id_siswa']; ?>" class="btn btn-info" title="Detail"><i class="fas fa-eye" style="font-size: 12px"></i></a>
					    				<a href="aksi_delete_formulir.php?id_siswa=<?php echo $c['id_siswa']; ?>" class="btn btn-danger" title="Hapus"><i class="fas fa-trash" style="font-size: 12px"></i></a>
					    			</td>
				    			</tr>
				    			<?php
				    				}
				    			?>
				    		</tbody>
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
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
</body>
</html>