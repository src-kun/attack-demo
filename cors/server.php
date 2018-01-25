<?php
	$headers = getallheaders();
	foreach ($headers as $name => $value) {
		echo $name.":".$value."\n";
	}
	//echo "\nrequest from ".$headers['Origin']."\n";
	//echo "response from ".$headers['Host']."\n";
	header('Access-Control-Allow-Origin:'.$headers['Origin']);
	header('Access-Control-Allow-Credentials: true');
?>
