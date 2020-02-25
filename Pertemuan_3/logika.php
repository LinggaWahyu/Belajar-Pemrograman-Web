<?php

	$bil1 = 100;
	$bil2 = 20;

	$teks1 = "PHP";
	$teks2 = "php";

	$hasil = ($bil1 <> $bil2) or ($teks1 == $teks2);
	printf("(%d <> %d) or (%s == %s) adalah %d<br>\n", $bil1, $bil2, $teks1, $teks2, $hasil);
	$hasil =! ($teks1 == $teks2);

	printf("! (%s == %s) adalah %d<br>\n", $teks1, $teks2, $hasil);

?>