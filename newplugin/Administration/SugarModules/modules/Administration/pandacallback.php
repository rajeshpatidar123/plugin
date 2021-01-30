<?php
require_once('config_override.php');
$state_check=$_REQUEST['state'];
$state=md5('123');
if($state_check==$state){
	$code=$_REQUEST['code'];
	$panda_client_id=$sugar_config['panda_client_id'];
	$panda_app_secrete=$sugar_config['panda_app_secrete'];
	$panda_redirect_url=$sugar_config['panda_redirect_url'];

	// exit();

	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL,"https://api.pandadoc.com/oauth2/access_token");
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS,
	            "grant_type=authorization_code&client_id=$panda_client_id&client_secret=$panda_app_secrete&code=$code&scope=read+write&redirect_uri=$panda_redirect_url");
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));


	// receive server response ...
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	$server_output = curl_exec ($ch);

	curl_close ($ch);
	$output=json_decode($server_output,true);
	// print_r($output);

	 $access_token=$output['access_token'];
	$refresh_token=$output['refresh_token'];
	 $expires_in=$output['expires_in'];

function url(){
	if(isset($_SERVER['HTTPS'])){
		$protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "https";
	}
	else{
		$protocol = 'https';
	}
		return $protocol . "://" . $_SERVER['HTTP_HOST'];
	}
$site_url= url();

	 $url=$site_url.'/index.php?entryPoint=Pandacallback&access_token='.$access_token.'&refresh_token='.$refresh_token.'&expires_in='.$expires_in.'';
	header('Location:'.$url);
}else{
	echo "Access Denied..........."; 
}
exit();