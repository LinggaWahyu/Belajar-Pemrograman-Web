<?php
	$usrname = $_POST['username'];
	$pass = $_POST['password'];
	$ulangi_password = $_POST['ulangi_password'];
	$level = $_POST['level'];
	$email = $_POST['email'];
	$nama_lengkap = $_POST['nama_lengkap'];
	$pass_md5 = md5($pass);

	if ($pass != $ulangi_password) {
		echo "<script>
				alert('Ulangi, password tidak sama'); 
				history.back();
			</script>";
	} else {
		include "koneksi.php";
		$sql = "INSERT INTO user VALUES (" . $usrname . "', '" . $pass_md5 . "', '" . $email . "', '" . $nama_lengkap . "','" . $level ."')";
		$a = $koneksi->query($sql);

		if ($a == true) {
			echo "<script>
				alert('Anda Sukses Registrasi');
				window.location.href = 'index.html';
			</script>";
		} else {
			echo "<script>
				alert('Anda Gagal Registrasi');
				history.back();
			</script>";
		}
	}
?>