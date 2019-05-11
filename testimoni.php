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
	<title>Testimonials</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initialscale=1">
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
                    <h1>Customer Testimonials</h1>
                    <h3>What the customer says about me?</h3>
                </div>
            </div>
        </div>
        <div class="container" style="margin-top:20px">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-9">
                        <div class="card-group">
                            <div class="card bg-primary">
                                <div class="card-body text-center">
                                    <h4 class="card-title"></h4>
                                    <img class="rounded-circle w-50 mx-auto d-block card-img-top" src="images/apple.jpg">
                                    <p class="card-text font-weight-bold"></p>
                                </div>
                            </div>
                            <div class="card bg-warning">
                                <div class="card-body text-center">
                                    <h4 class="card-title"></h4>
                                    <img class="rounded-circle w-50 mx-auto d-block card-img-top" src="images/apple.jpg">
                                    <p class="card-text font-weight-bold"></p>
                                </div>
                            </div>
                            <div class="card bg-success">
                                <div class="card-body text-center">
                                    <h4 class="card-title"></h4>
                                    <img class="rounded-circle w-50 mx-auto d-block card-img-top" src="images/apple.jpg">
                                    <p class="card-text font-weight-bold"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="col-md-3">
                        <form method="post" action="urlencrypt.php?url=home.php" enctype="multipart/form-data">
                            <input type="text" class="form-control" placeholder="Name" name="full_name">
                            <input type="text" class="form-control" placeholder="Email" name="email" style="margin-top: 10px;">
                            <textarea rows="2" class="form-control" style="margin-top: 10px;" name="text"></textarea>
                            <input type="file" class="form-control-file" style="margin-top: 10px;" name="image"   accept="image/x-png,image/gif,image/jpeg,image/jpg" onchange="validateFileType()">
                            
                            <input class="btn btn-success btn-block" type="submit" value="Send testimonial" style="margin-top: 10px;" >
                            <script type="text/javascript">
                                function validateFileType(){
                                    var file = document.getElementById("file").value;
                                    var idxDot = file.lastIndexOf(".") + 1;
                                    var extFile = file.substr(idxDot, file.length).toLowerCase();
                                    if (extFile=="jpg" || extFile=="jpeg" || extFile=="png"){
            //TO DO
        }else{
            alert("Only jpg/jpeg and png files are allowed!");
        }   
    }
</script>
</form>
<br>
<br>
</div>

</div>
</div>
</body>
</html>
