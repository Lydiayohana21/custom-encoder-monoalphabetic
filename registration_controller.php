<?php 

include 'config.php';
$nextPage = "urlencrypt.php?url=login.php";

// get the user inputs.

$email = $_POST["email"];
$password = $_POST["password"];
$full_name = $_POST["full_name"];
$description = $_POST["description"];
$image = "image\default.jpg";
$last_login = "Y-m-d H:i:s";


if($mysqli->query("INSERT INTO account (email, password, full_name, description, image, last_login) VALUES('$email', '$password', '$full_name', '$description', $image, '$last_login')")){
	echo 'Data inserted';
	echo '<br/>';
}

// header ("location:login.php");


// if (isset($_POST['register'])){
//       $email = $_POST['email'];
//       $password = $_POST['password'];
//       $full_name = $_POST['full_name'];
//       $description = $_POST['description'];
//       $image = 'images\default.jpg';
//       $last_login = "Y-m-d H:i:s";


//       $register = "INSERT INTO `account`( email, password, full_name, description, image, last_login) VALUES ('$email', '$password', '$full_name', '$description', '$image', '$last_login')";


//       if(mysqli_query($conn, $register )){
//       	echo "<center>Akun anda berhasil di daftarkan</center>";


//       }
//       else{
//       	echo "<center>Akun anda tidak berhasil di daftarkan</center>";
//       }

//     // $nextPage = "login.php";
//      }
//     // // redirect to another page
header("Location: {$nextPage}");
    // exit;

?>