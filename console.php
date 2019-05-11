<?php
include_once('functions/functions.php');

$targets = [
	"login.php",
	"testimoni.php",
	"register.php",
	"home.php",
	
];

foreach($targets as $target_url){
	$encrypted_url = encrypt($target_url);
	echo("{$target_url} -> {$encrypted_url} \n");
}



