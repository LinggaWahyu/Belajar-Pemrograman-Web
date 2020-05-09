<?php
	include "function.php";

	$id_kategori = $_POST['id'];

	$sql = "SELECT * FROM tbl_kategori WHERE id_kategori = " . $id_kategori;

	$hasil = query_json($sql);

	echo json_encode($hasil);	
?>