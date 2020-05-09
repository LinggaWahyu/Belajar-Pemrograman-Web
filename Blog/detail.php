<!DOCTYPE html>
<html>
<?php
	include "function.php";

	$id_artikel_terpilih = $_GET['id_tulis'];

	$sql = "SELECT judul, waktu, isi, gambar, nama_kategori, nama, id_tulis FROM tbl_artikel, tbl_kategori, tbl_kontributor, tbl_tulis_artikel WHERE tbl_artikel.id_artikel = tbl_tulis_artikel.id_artikel AND tbl_kategori.id_kategori = tbl_tulis_artikel.id_kategori AND tbl_kontributor.id_kontributor = tbl_tulis_artikel.id_kontributor AND tbl_tulis_artikel.id_tulis = " . $id_artikel_terpilih;

	$data_artikel = query($sql);
?>
<head>
	<link rel="stylesheet" type="text/css" href="css/detail_style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Operating System Blog</title>
</head>
<body>
	<div class="container">
		<div class="header">
			<h1 class="title_blog">Web Operating System</h1>
			<h5>Website history and explanation of various operating systems</h5>
		</div>
		<div class="navigation cf">
			<ul>
				<li><a href="index.php">Home</a></li>
				<?php
					$sql = "SELECT * FROM tbl_kategori";

					$data_kategori = query($sql);

					foreach ($data_kategori as $item_kategori):
						foreach ($data_artikel as $item_artikel): 
							if ($item_kategori['nama_kategori'] == $item_artikel['nama_kategori']) {
								echo "<li class='navigation_selected'><a href='kategori.php?kategori=$item_kategori[nama_kategori]'>$item_kategori[nama_kategori]</a></li>";
							} else {
								echo "<li><a href='kategori.php?kategori=$item_kategori[nama_kategori]'>$item_kategori[nama_kategori]</a></li>";
							}
						endforeach;	
					endforeach;
				?>
			</ul>
		</div>
		<div class="image_header">
			<img src="img/wallpaper_header.jpg" width="100%" height="280px" alt="gambar_header">
		</div>
		<?php
			foreach ($data_artikel as $item_artikel): 
		?>
		<div class="content cf">
			<h1><?php echo $item_artikel['judul']; ?></h1>
			<h3><?php echo $item_artikel['waktu']; ?></h3>
			<?php 
				echo "<img src='img/$item_artikel[gambar]' width='200px'>"; 
				echo $item_artikel['isi']; 
			?>
		</div>	
		<?php endforeach; ?>
		<div class="footer">
			<p>Copyright &#169; 2020 Lingga Wahyu Rochim</p>
		</div>
	</div>
</body>
</html>