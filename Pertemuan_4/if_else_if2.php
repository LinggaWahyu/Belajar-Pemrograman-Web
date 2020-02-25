<?php  
	$waktu = getdate();
	$jam = "$waktu[hours]";

	if ($jam <= 10) {
		echo "Selamat Pagi !";
	} else if ($jam <= 15) {
		echo "Selamat Siang !";
	} else if ($jam <= 18) {
		echo "Selamat Sore !";
	} else {
		echo "Selamat Malam !";
	}
?>