<?php
	include "koneksi.php";
	$uploadDir = "file_tugas/";
	if (isset($_POST['upload'])) {
		$fileName = $_FILES['userfile']['name'];
		$tmpName = $_FILES['userfile']['tmp_name'];
		$fileSize = $_FILES['userfile']['size'];
		$fileType = $_FILES['userfile']['type'];
		$fileDescription = $_POST['deskripsi'];
		$filePath = $uploadDir . $fileName;
		$result = move_uploaded_file($tmpName, $filePath);
		if (!$result) {
			echo "Error Uploading File";
			exit;
		}
		$query = "INSERT INTO tugas (name, size, type, path, description) VALUES ('" . $fileName . "', '" . $fileSize . "', '" . $fileType . "', '" . $filePath . "', '" . $fileDescription . "')";

		$a = mysqli_query($koneksi, $query);

		if ($a == true) {
			header("location: viewdata.php");
		} else {
			echo "Error Uploading File";
		}
	}
?>