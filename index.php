<?php
include 'config.php';
include_once('functions/functions.php');

if("$_SERVER[REQUEST_URI]" == '/customencoder/' || "$_SERVER[REQUEST_URI]" == '/customencoder/index.php'){
	header( 'Location: http://'.$_SERVER['HTTP_HOST'].'/customencoder/urlencrypt.php?url=home.php');
	die;
}
else{
	$url =  $_GET['url'];
	$target_file = decrypt($url);
	if($url == $target_file){
		$target_file = decrypt_2($url);
	}
	if(!file_exists($target_file)){
		echo("<br>
	<br>
	<center><h1>Page not Found!</h1></center>");
  		die;
	}
}

// echo $target_file;

// echo ("hasil target" . $target_file);



if(file_exists($target_file)){
	require_once($target_file);
  
}
else echo("<br>
	<br>
	<center><h1>Page not Found!</h1></center>");
  die;




?>