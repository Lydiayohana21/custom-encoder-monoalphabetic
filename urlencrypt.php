<?php

include_once('functions/functions.php');

$encrypted_url = $_GET['url'];
$enc = encrypt($encrypted_url);
//echo $enc;
header( 'Location: http://'.$_SERVER['HTTP_HOST'].'/customencoder/index.php?url='. $enc);



?>