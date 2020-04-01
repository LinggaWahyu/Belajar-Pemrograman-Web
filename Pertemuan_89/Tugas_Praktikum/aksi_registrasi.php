<?php
	$usrname = $_POST['username'];
	$pass = $_POST['password'];
	$ulangi_password = $_POST['ulangi_password'];
	$level = $_POST['level'];
	$pass_md5 = md5($pass);

	if ($pass != $ulangi_password) {
		echo "<script>
				alert('Ulangi, password tidak sama'); 
				history.back();
			</script>";
	} else {
		include "koneksi.php";
		$sql = "INSERT INTO user VALUES (null, '" . $usrname . "', '" . $pass_md5 . "', '" . $level . "')";
		$a = $koneksi->query($sql);

		if ($a == true) {
			echo "<script>
				alert('Anda Sukses Registrasi');
				window.location.href = 'form_login.html';
			</script>";
		} else {
			echo "<script>
				alert('Anda Gagal Registrasi');
				history.back();
			</script>";
		}
	}
?>