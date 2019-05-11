<?php 

global $mysqli;

$db_username = 'root';
$db_password = '';
$db_name = 'keslan';
$db_host = 'localhost';
$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);


// global $conn;

// $servername = "localhost";

// $username ='root';
// $password = "";
// $dbname = "keslan";

// // Create connection


// $conn = mysqli_connect($servername, $username, $password, $dbname);
// // Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }

?>
