<?php
		header("Content-type: application/vnd-ms-excel");
		header("Content-Disposition: attachment; filename=Data Siswa PPDB Madrasah ABC.xls");
?>
<body>
	<style type="text/css">
	body {
		font-family: sans-serif;
		overflow-y:auto;
		overflow-x:scroll;
	}
	table {
		margin: 20px auto;
		border-collapse: collapse;
		overflow-y:auto;
		overflow-x:scroll;
	}
	table th {
		background-color: #eaeaea;
		height: 30px;
	}
	table th,
	table td {
		text-align: center;
		border: 1px solid #3c3c3c;
		padding: 3px 8px;
	}
	</style>	
	<table border="1">
		<tr>
			<th>NSM</th>
			<th>NPSN</th>
			<th>Status Siswa</th>
			<th>Nama Siswa</th>
			<th>NISM</th>
			<th>NISN</th>
			<th>NIK</th>
			<th>Tempat Lahir</th>
			<th>Tanggal Lahir</th>
			<th>Jenis Kelamin</th>
			<th>Agama</th>
			<th>Hobi</th>
			<th>Cita-Cita</th>
			<th>Anak Ke-</th>
			<th>Jumlah Saudara</th>
			<th>Tanggal Masuk</th>
			<th>Tahun Ajaran</th>
			<th>Tingkat/Kelas</th>
			<th>Kelas Paralel</th>
			<th>Jenis Asal Sekolah</th>
			<th>NPSN Sekolah Asal</th>
			<th>Nama Sekolah Asal</th>
			<th>Alamat Sekolah Asal</th>
		</tr>
		<?php
			include "koneksi.php";

			$sql = "SELECT *, kd_jenis_asal_sekolah FROM formulir_pendaftaran NATURAL JOIN jenis_asal_sekolah WHERE formulir_pendaftaran.id_jenis_asal_sekolah = jenis_asal_sekolah.id_jenis_asal_sekolah";
			$a = $koneksi->query($sql);

			while ($c = $a->fetch_array()) {
		?>
			<tr>
				<td><?php echo $c['NSM']; ?></td>
				<td><?php echo $c['NPSN']; ?></td>
				<td><?php echo $c['status_siswa']; ?></td>
				<td><?php echo $c['nama_siswa']; ?></td>
				<td><?php echo $c['NISM']; ?></td>
				<td><?php echo $c['NISN']; ?></td>
				<td><?php echo $c['NIK']; ?></td>
				<td><?php echo $c['tempat_lahir']; ?></td>
				<td><?php echo $c['tanggal_lahir']; ?></td>
				<td><?php echo $c['kd_jk']; ?></td>
				<td><?php echo $c['kd_agama']; ?></td>
				<td><?php echo $c['kd_hobi']; ?></td>
				<td><?php echo $c['kd_cita_cita']; ?></td>
				<td><?php echo $c['anak_ke']; ?></td>
				<td><?php echo $c['jumlah_saudara']; ?></td>
				<td><?php echo $c['tanggal_masuk']; ?></td>
				<td><?php echo $c['tahun_ajaran']; ?></td>
				<td><?php echo $c['kd_tingkat_kelas']; ?></td>
				<td><?php echo $c['kd_kelas_paralel']; ?></td>
				<td><?php echo $c['kd_jenis_asal_sekolah']; ?></td>
				<td><?php echo $c['NPSN_sekolah_asal']; ?></td>
				<td><?php echo $c['nama_sekolah_asal']; ?></td>
				<td><?php echo $c['alamat_sekolah_asal']; ?></td>
			</tr>
		<?php		
			}
		?>
	</table>
</body>