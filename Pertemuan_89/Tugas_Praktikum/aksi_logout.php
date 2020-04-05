<?php
    session_start();
	unset($_SESSION['id_user']);
	unset($_SESSION['level']);
	echo "<script>
				alert('Anda Sukses Logout');
				window.location.href = 'index.html';
			</script>";
?>