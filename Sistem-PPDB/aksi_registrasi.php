<?php
	session_start();
	include "koneksi.php";
	$pass = $_POST['password'];
	$ulangi_password = $_POST['ulangi_password'];
	$nama_lengkap = $_POST['nama_lengkap'];
	$email = $_POST['email'];
	$pass_md5 = md5($pass);

	$sql = "SELECT email FROM siswa WHERE email = '" . $email . "'";
	$a = $koneksi->query($sql);

	if ($a && mysqli_num_rows($a) > 0) {
		echo "<script>
				alert('Email Sudah Terdfatar !'); 
				history.back();
			</script>";
	} else if ($pass != $ulangi_password) {
		echo "<script>
				alert('Ulangi, password tidak sama'); 
				history.back();
			</script>";
	} else {
		include "koneksi.php";
		$sql = "INSERT INTO siswa VALUES (null, '" . $nama_lengkap . "', '" . $email . "', '" . $pass_md5 . "', 'Belum Aktif', 'Belum Mengisi Formulir', null)";
		$a = $koneksi->query($sql);

		if ($a == true) {
			require_once('library/class.phpmailer.php');
			$mail = new PHPmailer(true);
			$link_confirm = "localhost/Sistem-PPDB/confirm.php?email=" . $email;
			$body = "<body style='margin: 10px;'>
			<div style='width: 640px; font-family: Helvetica, sans-serif; font-size: 13px; padding:10px; line-height:150%; border:#eaeaea solid 10px;'>
			<br>
			<strong>Terima Kasih Telah Mendaftarkan Akun di PPDB Sekolah ABC</strong><br>
			<b>Nama Anda : </b>" . $nama_lengkap . "<br>
			<b>Email : </b>" . $email . "<br>
			<div style=" . "text-align: center;" . ">
				<a href=" . $link_confirm . "><p style=" . "background-color: blue; color: white; margin: auto; width: 20%;" . ">Aktivasi Akun</p></a>
			</div>
			<br>
			</div>
			</body>";

			$mail->IsSMTP(); 	
			$mail->SMTPDebug  = 0;   

			$mail->SMTPAuth   = true;   
			$mail->Host 	  = 'smtp.gmail.com';
			$mail->Port       = 465;
			$mail->Username   = "linggawahyurochim@gmail.com"; 
			$mail->Password   = "lingga120400";
			$mail->SMTPSecure = 'ssl';       

			$mail->setFrom('linggawahyurochim@gmail.com', 'PPDB Madrasah ABC');

			$mail->isHTML(true);
			$mail->Subject    = "Aktivasi Pendaftaran Akun PPDB Madrasah ABC";
			$mail->Body       = $body;

			$address = $email;
			$mail->AddAddress($address, $nama_lengkap);

			if(!$mail->Send()) {
				echo "Oops, Mailer Error: " . $mail->ErrorInfo;
			} else {
				echo "Mail Sukses";
			}
			echo "<script>
				alert('Anda Sukses Registrasi, Silahkan Cek Email Anda untuk Aktivasi Akun !');
				window.location.href = 'index.html';
			</script>";
		} else {
			echo "<script>
				alert('Anda Gagal Registrasi !');
				history.back();
			</script>";
		}
	}
?>