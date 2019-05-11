<?php

$key = array(
   'a' => '1',
   'b' => '2',
   'c' => 'E',
   'd' => '7',
   'e' => '0',
   'f' => 'T',
   'g' => 'B',
   'h' => 'M',
   'i' => '5',
   'j' => 'U',
   'k' => 'X',
   'l' => '3',
   'm' => 'I',
   'n' => 'Z',
   'o' => '6',
   'p' => 'K',
   'q' => 'S',
   'r' => 'G',
   's' => '8',
   't' => 'Q',
   'u' => '7',
   'v' => 'H',
   'w' => 'N',
   'x' => 'R',
   'y' => 'F',
   'z' => '4',
   '.' => '9'
);

$key_d = array(
   '1' => 'a',
   '2' => 'b',
   'E' => 'c',
   '7' => 'd',
   '0' => 'e',
   'T' => 'f',
   'B' => 'g',
   'M' => 'h',
   '5' => 'i',
   'U' => 'j',
   'X' => 'k',
   '3' => 'l',
   'I' => 'm',
   'Z' => 'n',
   '6' => 'o',
   'K' => 'p',
   'S' => 'q',
   'G' => 'r',
   '8' => 's',
   'Q' => 't',
   '7' => 'u',
   'H' => 'v',
   'N' => 'w',
   'R' => 'x',
   'F' => 'y',
   '4' => 'z',
   '9' => '.'
);

function encrypt($url){
  global $key;
  $encrypted = str_replace(array_keys($key), $key, $url);
  return($encrypted);
}

function decrypt($encrypted){
  global $key;
  $url = str_replace( $key, array_keys($key), $encrypted);
  return($url);
}

function decrypt_2($encrypted){
  global $key_d;
  $url = str_replace( $key_d, array_keys($key_d), $encrypted);
  return($url);
}


function isIndex(){
  // expected url:
  // localhost/index.php?url=sadsdsadasd
  $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  $chunks = explode('/', $url);
  
  //echo $chunks[3];
  if((strpos($chunks[3], 'index.php') != 0) || !isset($_GET['url'])){

    return false;
  }
  
  return true;
}

?>
