<?php

	$koneksi = mysqli_connect("localhost", "root", "", "db_blog");

	if (!$koneksi) {
		die("koneksi gagal: " . mysqli_connect_error());
	}

	function query($sql) {
		global $koneksi;
		$hasil = mysqli_query($koneksi, $sql);
		$array_artikel = array();
		while ($data_artikel = mysqli_fetch_assoc($hasil)) {
			$array_artikel[] = $data_artikel;
		}
		return $array_artikel;
	}

	function potong_teks($teks, $jumlah_karakter) {
		$karakter = $teks{$jumlah_karakter-1};
		while ($karakter != " ") {
			$karakter = $teks{--$jumlah_karakter};
		}
		return substr($teks, 0, $jumlah_karakter);
	}
?>