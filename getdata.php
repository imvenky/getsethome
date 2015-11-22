<?php

	$username = "getset";
    $password = "homeemail";

	$url 	= 'http://smcbazaar.com/email.php';
	$ch 	= curl_init($url);
	curl_setopt($ch, CURLOPT_TIMEOUT, 5);
	curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$data = curl_exec($ch);
	
	print_r(curl_exec($ch));
	exit();
	curl_close($ch);
	print_r($data);
?>