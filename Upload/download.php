<?php
	include "koneksi.php";
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$query = "SELECT name, type, size, path FROM upload WHERE id = " . $id;
		$result = mysqli_query($koneksi, $query);
		list($name, $type, $size, $path) = mysqli_fetch_array($result);
		header("Content-Disposition: attachment; filename=$name");
		header("Content-length: $size");
		header("Content-type: $type");
		echo $path;
		exit;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Download File From MySQL</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
	<?php
		include "koneksi.php";
		$query = "SELECT id, name, path FROM upload";
		$result = mysqli_query($koneksi, $query);

		if (mysqli_num_rows($result) == 0) {
			echo "<br>Database is empty</br>";
		} else {
			echo "<br>";
			while (list($id, $name,$path) = mysqli_fetch_array($result)) {
	?>
				<a href="<?php echo $path;?>"><?php echo $name;?></a><br>
	<?php			
			}
		}
	?>
</body>
</html>