<!DOCTYPE html>
<html>
<?php
	include "function.php";

	$sql = "SELECT judul, waktu, isi, gambar, nama_kategori, nama, id_tulis FROM tbl_artikel, tbl_kategori, tbl_kontributor, tbl_tulis_artikel WHERE tbl_artikel.id_artikel = tbl_tulis_artikel.id_artikel AND tbl_kategori.id_kategori = tbl_tulis_artikel.id_kategori AND tbl_kontributor.id_kontributor = tbl_tulis_artikel.id_kontributor ORDER BY id_tulis DESC";

	$data_artikel = query($sql);
?>
<head>
	<link rel="stylesheet" type="text/css" href="css/home_style.css">
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
				<li class="navigation_selected"><a href="index.php">Home</a></li>
				<?php
					$sql = "SELECT * FROM tbl_kategori";

					$data_kategori = query($sql);

					foreach ($data_kategori as $item_kategori):
						echo "<li><a href='kategori.php?kategori=$item_kategori[nama_kategori]'>$item_kategori[nama_kategori]</a></li>";
					endforeach;
				?>
			</ul>
		</div>
		<div class="image_header">
			<img src="img/wallpaper_header.jpg" width="100%" height="280px" alt="gambar_header">
		</div>
		<div class="content cf">
			<div class="article">
				<?php
					foreach ($data_artikel as $item_artikel):
				?>
				<div class="article_section">
					<h1><?php echo $item_artikel['judul']; ?></h1>
					<h3><?php echo $item_artikel['waktu']; ?></h3>
					<?php echo "<img src='img/$item_artikel[gambar]' width='200px'>"; ?>
					
					<?php 
						$hasil_potong = potong_teks($item_artikel['isi'], 500);
						echo $hasil_potong . " .....<br><br>";
						echo "<a href='detail.php?id_tulis=$item_artikel[id_tulis]' class='btn_read_more'>Read More</a>";
					 ?>
					
				</div>
				<?php endforeach; ?>
			</div>
			<div class="sidebar">
				<div class="about">
					<h1>About</h1>
					<p>
						Sistem operasi (bahasa Inggris: operating system; disingkat OS) adalah perangkat lunak sistem yang mengatur sumber daya dari perangkat keras dan perangkat lunak, serta sebagai daemon untuk program komputer. Tanpa sistem operasi, pengguna tidak dapat menjalankan program aplikasi pada komputer mereka, kecuali program booting.

						Sistem operasi mempunyai penjadwalan yang sistematis mencakup perhitungan penggunaan memori, pemrosesan data, penyimpanan data, dan sumber daya lainnya.
					</p>
				</div>
				<div class="latest_article">
					<h1>Latest Articles</h1>
					<ul>
						<?php
							$i = 1;
							foreach ($data_artikel as $item_artikel):
								echo "<li><a href='detail.php?id_tulis=$item_artikel[id_tulis]'>$item_artikel[judul]</a></li>";
								if ($i++ == 5) {
									break;
								}
							endforeach; 
						?>
						
					</ul>
				</div>
				<div class="contact_me">
					<h1>Contact Me</h1>
						<a href="https://www.facebook.com/lingga.wahyurochim" target="_blank"><img src="img/icon_facebook.png" alt="Icon Facebook"></a>
						<a href="https://api.whatsapp.com/send?phone=6281217453887" target="_blank"><img src="img/icon_whatsapp.png" alt="Icon Facebook"></a>
						<a href="https://www.instagram.com/linggawahyu_12/" target="_blank"><img src="img/icon_instagram.png" alt="Icon Facebook"></a>
				</div>
			</div>
		</div>
		<div class="footer">
			<p>Copyright &#169; 2020 Lingga Wahyu Rochim</p>
		</div>
	</div>
</body>
</html>