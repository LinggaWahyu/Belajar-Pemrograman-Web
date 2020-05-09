<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/table_style.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<title>Data Kategori</title>
</head>
<body>
	<div class="container">
		<button onclick="document.getElementById('insert_kategori').style.display='block'">Kategori Baru</button>
		<br><br>
		<div id=tabel_kategori>
			
		</div>
	</div>

	<div id="insert_kategori" class="w3-modal">
		<div class="w3-modal-content w3-animate-zoom">
			<header class="w3-container w3-blue">
				<span onclick="document.getElementById('insert_kategori').style.display='none'" class="w3-button w3-display-topright">&times;</span>
				<h4 class="w3-text-white">Tambah Kategori</h4>
			</header>
			<div class="w3-container">
				<form id="form_kategori" class="w3-container" method="POST">
					<div class="w3-section">
						<label for="nama_kategori"><b>Nama Kategori</b></label>
						<input type="text" name="nama_kategori" id="nama_kategori" class="w3-input w3-border w3-margin-bottom" placeholder="Masukkan Nama Kategori">
						<label for="keterangan"><b>Keterangan</b></label>
						<input type="text" name="keterangan" id="keterangan" class="w3-input w3-border w3-margin-bottom" placeholder="Masukkan Keterangan Kategori">
					</div>
				</form>
			</div>
			<div class="w3-container w3-border-top w3-padding-16 w3-white">
				<div class="w3-display-container">
					<button onclick="document.getElementById('insert_kategori').style.display='none'" type="button" class="w3-button w3-red">Batal</button>
					<span class="w3-right"><button type="button" id="simpan" class="w3-button w3-green">Simpan</button></span>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		$(document).ready(function() {
			$('#tabel_kategori').load("tampil_kategori.php");
			$('#simpan').click(function() {
				var data_kategori = $('#form_kategori').serialize();
				$.ajax({
					type: 'POST',
					url: 'insert_kategori.php',
					data: data_kategori,
					cache: false,
					success: function(response) {
						document.getElementById("nama_kategori").value="";
						document.getElementById("keterangan").value="";
						$('#tabel_kategori').load("tampil_kategori.php");
						window.alert(response);
					} 
				});
			});
		});
	</script>
</body>
</html>