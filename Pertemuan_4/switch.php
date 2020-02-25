<?php  
	$a = "Indonesia";

	switch ($a) {
		case "Belanda":
			echo "Negara anda adalah Belanda";
			break;
		case "Jerman":
			echo "Negara anda adalah Jerman";
			break;
		case 'Indonesia':
			echo "Negara anda adalah Indonesia";
			break;
		default:
			echo "Anda tidak punya negara";
			break;
	}
?>