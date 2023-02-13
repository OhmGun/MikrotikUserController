<?php
require("routeros_api.class.php");
$API = new routeros_api();
$API->debug = true;
$user_mikrotik  = "jogja";
$password_mikrotik  = "jogja";
$ip_mikrotik    = "202.51.121.195";

if($API->connect($ip_mikrotik, $user_mikrotik, $password_mikrotik)){
$username 	= $_POST['username'];
$password 	= $_POST['password'];
$mac	  	= $_POST['mac'];
$profile	= $_POST['profile'];
	try {
	$cekuser = $API->comm('/ip/hotspot/user/print',array(
			"?name"     => $username,
			));
	if(count($cekuser)>0){
		echo "<script>window.location='http://solusi247-wifi.net/gagal.html'</script>";
	}else{
    $API->comm("/ip/hotspot/user/add", array(
			"server"		=> "247-jogjaNet",
			"profile"		=> $profile,
			"name"     		=> $username,
			"password"		=> $password,
			"comment"		=> "Divisi - $profile | Mac-Address Utama : $mac",
			"disabled"		=> "yes"
			));
    echo "<script>window.location='http://solusi247-wifi.net/sukses.html'</script>";
		}
		$API->disconnect();
	} 
	catch (Exception $ex) {
	echo "Caught exception from router: " . $ex->getMessage() . "\n";
	}	
 
} else {
  echo " Router Not Connected";
  }
?>
