<?php
	$uploadDir = 'file/';
	if (isset($_POST['upload'])) {
		$fileName = $_FILES['userfile']['name'];
		$tmpName = $_FILES['userfile']['tmp_name'];
		$fileSize = $_FILES['userfile']['size'];
		$fileType = $_FILES['userfile']['type'];
		$filePath = $uploadDir . $fileName;
		$result = move_uploaded_file($tmpName, $filePath);
		if (!$result) {
			echo "Error Uploading File";
			exit;
		}
		include 'koneksi.php';
		$query = "INSERT INTO upload (name, size, type, path) VALUES ('" . $fileName . "', '" . $fileSize . "', '" . $fileType . "', '" . $filePath . "')";

		$a = mysqli_query($koneksi, $query);

		if ($a == true) {
			echo "<br>File Uploaded</br>";
		} else {
			echo "Error Uploading File";
		}
	}
?>