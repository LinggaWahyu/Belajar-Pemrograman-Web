<?php
	$ip_address = "114.125.81.90";
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

    echo $name, $Latitude, $Longitude, $statuscode;
?>