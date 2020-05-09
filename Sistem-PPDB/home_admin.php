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
					<li class="list-group-item list-group-item-success"><a href="#">Menu Utama</a></li>
					<li class="list-group-item"><a href="daftar_siswa_mendaftar.php">Daftar Siswa yang Mendaftar</a></li>
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
						<b>Pengumuman</b>
					</div>
				    <div class="card-body">
				    	<p>Selamat Datang di PPDB Madrasah ABC</p>
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