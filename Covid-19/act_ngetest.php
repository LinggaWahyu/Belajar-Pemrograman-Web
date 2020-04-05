<?php
	session_start();
	include "koneksi.php";

	$id_pasien = $_SESSION['idpasien'];

	if (isset($_POST['check_gejala'])) {
		$sql1 = "SELECT COUNT(idgejala) FROM gejala";
		$a = $koneksi->query($sql1);
		$b = $a->fetch_array();
		$banyak = $b['COUNT(idgejala)'];
		$nilai = round(100 / $banyak);
		$nilai_fuzzy = 0;
		$kategori;
		for ($i=1; $i <= $banyak; $i++) { 
			$index_jawab = "jawab_" . $i;
			$index_ket = "ket_" . $i;
			$jawab = $_POST[$index_jawab];
			$ket = $_POST[$index_ket];

			$sql2 = "INSERT INTO ngetest VALUES(null, " . $id_pasien . ", " . $i . ", sysdate(), '" . $jawab . "', '" . $ket . "')";
			$c = $koneksi->query($sql2);

			if ($jawab == "Ya") {
				$nilai_fuzzy += $nilai;
			}
		}
		if ($nilai_fuzzy == 100) {
			$kategori = "Positif";
		} else if ($nilai_fuzzy < 100 && $nilai_fuzzy >= 80) {
			$kategori = "Positif";
		} else if ($nilai_fuzzy < 80 && $nilai_fuzzy >= 60) {
			$kategori = "PDP";
		} else if ($nilai_fuzzy < 60 && $nilai_fuzzy >= 40) {
			$kategori = "ODP"; 
		} else if ($nilai_fuzzy < 40 && $nilai_fuzzy >= 20) {
			$kategori = "ODR"; 
		} else if ($nilai_fuzzy < 20 && $nilai_fuzzy >= 0) {
			$kategori = "Negatif";
		} else {
			$kategori = "Negatif";
		}

		echo "Anda masuk dalam kategori <b>$kategori Covid-19</b>";

		$id = $_SESSION['id'];
		$sql3 = "UPDATE markers SET type = '" . $kategori . "' WHERE id = " . $id;
		$d = $koneksi->query($sql3);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<br><br>
	[<a href="form_pasien.html">Home</a>]
	[<a href="cek_persebaran.php">Cek Persebaran</a>]
</body>
</html>