<?php
	session_start();
	include "koneksi.php";
	$user = $_POST['username'];
	$psw = md5($_POST['psw']);

	$op = $_GET['op'];

	if ($op == "in") {
		$query = "SELECT * FROM user WHERE username = '" . $user . "' AND password = '" . $psw . "'";
		$h_1 = $koneksi->query($query);
		if (mysqli_num_rows($h_1) == 1) {
			$d_1 = $h_1->fetch_array();
			$_SESSION['id_user'] = $d_1['id_user'];
			$_SESSION['level'] = $d_1['level'];
			if ($d_1['level'] == "Admin") {
				header("location: home_admin.php");
				// echo "admin";
			} else if ($d_1['level'] == "Pengguna") {
				header("location: home_pengguna.php");
				// echo "pengguna";
			}
		} else {
				die("password salah <a href=\"javascript:history.back()\">kembali</a>");
			}
	} else if ($op == "out"){
		unset($_SESSION['id_user']);
		unset($_SESSION['level']);
		header("location: form_login.html");
	}
?>