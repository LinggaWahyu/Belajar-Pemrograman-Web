<?php
	session_start();
	include "koneksi.php";

	$nama_pasien = $_POST['nama_pasien'];
    $usia = $_POST['usia'];
    $jk = $_POST['jk'];
    $tgllahir = $_POST['tgllahir'];
    $telepon = $_POST['telepon'];

    //get user ip address
    if (isset($_SERVER['HTTP_CLIENT_IP']))
	{
	    $real_ip_adress = $_SERVER['HTTP_CLIENT_IP'];
	}

	if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
	{
	    $real_ip_adress = $_SERVER['HTTP_X_FORWARDED_FOR'];
	}
	else
	{
	    $real_ip_adress = $_SERVER['REMOTE_ADDR'];
	}

	$ip_address = $real_ip_adress;
    // $ip_address = "114.125.81.90";
    //get user ip address details with geoplugin.net
    $link = "https://www.iplocate.io/api/lookup/" . $ip_address;
    $addrDetailsArr = json_decode(file_get_contents($link), true);
    //get city name by return array
    $city = $addrDetailsArr['city'];
    //get country name by return array
    $country = $addrDetailsArr['country'];
    $name = $city . ", " . $country;

    $Latitude = $addrDetailsArr['latitude'];
    $Longitude = $addrDetailsArr['longitude'];
    $statuscode;

    if($Latitude != 0){
        $statuscode = "OK";
    }else{
        $statuscode = "-";
    }

    $sql1 = "INSERT INTO markers VALUES (null, '" . $statuscode ."', '" . $name . "', '" . $ip_address . "', " . $Latitude . ", " . $Longitude . ", 'www')";
    $a = $koneksi->query($sql1);
    
    if ($a == true) {
     	$sql2 = "SELECT MAX(id) FROM markers";
     	$b = $koneksi->query($sql2);
     	$c = $b->fetch_array();
     	$id = $c['MAX(id)'];

     	$sql3 = "INSERT INTO pasien VALUES (null, " . $id . ", '" . $nama_pasien . "', " . $usia . ", '". $jk ."', '". $tgllahir . "', '" . $telepon . "')";
     	$d = $koneksi->query($sql3);

     	if ($d == true) {
			$sql4 = "SELECT MAX(idpasien) FROM pasien";
			$e = $koneksi->query($sql4);
			$f = $e->fetch_array();
			$_SESSION['idpasien'] = $f['MAX(idpasien)'];

			echo "<script>
				alert('Input Pasien Sukses');
				window.location.href = 'home_test_gejala.php';
			</script>";
     	} else
     	echo "Error 1";
    } else {
    	echo "Error 2";
    }
?>