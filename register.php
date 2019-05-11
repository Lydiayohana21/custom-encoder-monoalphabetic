<?php
include_once('functions/functions.php');

if(!isIndex()){
  echo("<br>
   <br>
   <center><h1>Page not Found!</h1></center>");
  die;
}

include "navbar.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</form>
</head>
<body>
	<div class="container" style="margin-top:20px">
        <div class="row">
            <div class="col-md-3">
                <img class="rounded-circle w-50 mx-auto d-block" src="images/apple.jpg"> </div>
                <div class="col-md-9">
                    <h1>Customer Registration</h1>
                    <h3>To register, please complete the following form.</h3>
                </div>
            </div>
        </div>
        <div class="container" style="margin-top:20px">
            
            
            
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <form name="form_register" action="urlencrypt.php?url=registration_controller.php" method="post" >
                        
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="full_name"><b>Full name*</b></label>
                                    <input type="text" id="full_name" name="full_name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="email" style="margin-top: 10px;"><b>Email*</b></label>
                                    <input type="text" id="email" name="email" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4 border-left">
                                <div class="form-group">
                                    <label for="password"><b>Password*</b></label>
                                    <input type="password" id="password" name="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="repassword" style="margin-top: 10px;">
                                        <b>Retype password*</b>
                                    </label>
                                    <input type="password" id="repassword" name="repassword" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4 border-left">
                                <div class="form-group">
                                    <label for="description">
                                        <b>Describe about yourself</b>
                                    </label>
                                    <textarea rows="3" id="description" name="description" class="form-control"></textarea>
                                </div>
                                <span>
                                    <i><b>Note:</b> fields with * are required</i>
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 offset-md-8">
                                <input class="btn btn-primary btn-block" type="submit" name="register" value="Register">
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </form>
    </div>
</div>
</div>
</body>
</html>
