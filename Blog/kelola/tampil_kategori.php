<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
	include "function.php";
	$sql = "SELECT id_kategori, nama_kategori, keterangan FROM tbl_kategori";

	$data_kategori = query($sql);
?>

	<table>
		<tr>
			<th>No.</th>
			<th>Nama</th>
			<th>Keterangan</th>
			<th>Aksi</th>
		</tr>
		<?php
			$nomor = 1;
			foreach ($data_kategori as $item_kategori): 
		?>
			<tr>
				<td class="center"><?php echo $nomor; ?></td>
				<td><?php echo $item_kategori['nama_kategori']; ?></td>
				<td><?php echo $item_kategori['keterangan']; ?></td>
				<td class="center">
					<button type="button" id="<?php echo $item_kategori['id_kategori']; ?>" class="w3-button w3-green update">Update</button>
					<button type="button" id="<?php echo $item_kategori['id_kategori']; ?>" class="w3-button w3-red delete">Hapus</button>
				</td>
			</tr>
		<?php
			$nomor++;
			endforeach;
		?>
	</table>

	<div id="update_kategori" class="w3-modal">
		<div class="w3-modal-content w3-animate-zoom">
			<header class="w3-container w3-blue">
				<span onclick="document.getElementById('update_kategori').style.display='none'" class="w3-button w3-display-topright">&times;</span>
				<h4 class="w3-text-white">Update Kategori</h4>
			</header>
			<div class="w3-container">
				<form id="update_form_kategori" class="w3-container" method="POST">
					<div class="w3-section">
						<label for="update_id_kategori"><b>ID Kategori</b></label>
						<input type="text" name="update_id_kategori" readonly id="update_id_kategori" class="w3-input w3-border w3-light-grey w3-text-grey w3-margin-bottom" placeholder="Masukkan ID Kategori">
						<label for="update_nama_kategori"><b>Nama Kategori</b></label>
						<input type="text" name="update_nama_kategori" id="update_nama_kategori" class="w3-input w3-border w3-margin-bottom" placeholder="Masukkan Nama Kategori">
						<label for="update_keterangan"><b>Keterangan</b></label>
						<input type="text" name="update_keterangan" id="update_keterangan" class="w3-input w3-border w3-margin-bottom" placeholder="Masukkan Keterangan Kategori">
					</div>
				</form>
			</div>
			<div class="w3-container w3-border-top w3-padding-16 w3-white">
				<div class="w3-display-container">
					<button onclick="document.getElementById('update_kategori').style.display='none'" type="button" class="w3-button w3-red">Batal</button>
					<span class="w3-right"><button type="button" id="button_update" class="w3-button w3-green">Update</button></span>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		$(document).ready(function() {
			$('.delete').click(function() {
				var konfirmasi = confirm("Apakah anda yakin ingin menghapus data ?");
				if (konfirmasi == true) {
					var id_kategori = $(this).attr('id');
					$.ajax({
						type: 'POST',
						url: 'delete_kategori.php',
						data: {id:id_kategori},
						cache: false,
						success: function(response) {
							$('#tabel_kategori').load('tampil_kategori.php');
							window.alert(response);
						}
					});
				}
			});
			$('.update').click(function() {
				$('#update_kategori').show();
				var id_kategori = $(this).attr('id');
				$.ajax({
					type: 'POST',
					url: 'ambil_data_kategori.php',
					data: {id:id_kategori},
					dataType: 'json',
					success: function(response) {
						document.getElementById('update_id_kategori').value = response.id_kategori;
						document.getElementById('update_nama_kategori').value = response.nama_kategori;
						document.getElementById('update_keterangan').value = response.keterangan;
					}
				});
			});
			$('#button_update').click(function() {
				var data_kategori = $('#update_form_kategori').serialize();
				$.ajax({
					type: 'POST',
					url: 'update_kategori.php',
					data: data_kategori,
					cache: false,
					success: function(response) {
						window.alert(response);
						$('#update_kategori').hide();
						$('#tabel_kategori').load('tampil_kategori.php');
					}
				});
			});
		});
	</script>
</body>
</html>