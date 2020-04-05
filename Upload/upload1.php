<?php
	$uploadDir = 'file/';
	if (isset($_POST['upload'])) {
		$fileName = $_FILES['userfile']['name'];
		$tmpName = $_FILES['userfile']['tmp_name'];
		$fileSize = $_FILES['userfile']['size'];
		$fileType = $_FILES['userfile']['type'];

		// echo $fileName;
		// echo "<br>";
		// echo $tmpName;
		// echo "<br>";
		// echo $fileSize;
		// echo "<br>";
		// echo $fileType;
		// echo "<br>";

		$filePath = $uploadDir . $fileName;
		$result = move_uploaded_file($tmpName, $filePath);
		if ($result) {
			echo "<br>File uploaded</br>";
		} else {
			echo "Gagal Upload";
		}
	}
?>