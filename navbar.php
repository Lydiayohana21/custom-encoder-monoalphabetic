<?php
include_once('functions/functions.php');

if(!isIndex()){
  echo("<br>
    <br>
    <center><h1>Page not Found!</h1></center>");
  die;
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
<!--     
    <link rel="stylesheet" href="navbar_style.css">

    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <script src="jquery-3.2.1.min.js"></script> -->
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="urlencrypt.php?url=home.php">Custom Encoder</a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="urlencrypt.php?url=home.php">Home</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="urlencrypt.php?url=testimoni.php">Testimonials</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="urlencrypt.php?url=register.php">Register</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="urlencrypt.php?url=login.php">Login</a>
            </li>
        </ul>
    </nav>
    

</body>
</html>
