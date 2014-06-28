<?php

	$address = $_GET['add'];
	$pixiv = 'pixiv';
	if (strpos($address,$pixiv) === false){
		header("HTTP/1.1 301 Moved Permanently");
		header ("Location: http://moe.akibarika.org/");
	}
	else{
		$ch = curl_init();
		curl_setopt($ch,CURLOPT_URL, $address);
		curl_setopt($ch,CURLOPT_REFERER,"http://www.pixiv.net/"); 
		curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
		$res = curl_exec($ch);
		header('Content-Type:' .curl_getinfo($ch, CURLINFO_CONTENT_TYPE));
		echo($res);
		curl_close($ch);
	}
?>


