<!DOCTYPE html>
<html lang="en">

<head>
    
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">

    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
      
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css" />

	<title>AllFest</title>
        <link rel="stylesheet" type="text/css" href="css/my_style.css">
    <link src="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<!--  -->

	<style>
       @charset "UTF-8";
/* CSS Document */

body {
    width:100px;
	height:100px;
  background: -webkit-linear-gradient(90deg, #16222A 10%, #1b9b38 90%); /* Chrome 10+, Saf5.1+ */
  background:    -moz-linear-gradient(90deg, #16222A 10%, #1b9b38 90%); /* FF3.6+ */
  background:     -ms-linear-gradient(90deg, #16222A 10%, #1b9b38 90%); /* IE10 */
  background:      -o-linear-gradient(90deg, #16222A 10%, #1b9b38 90%); /* Opera 11.10+ */
  background:         linear-gradient(90deg, #16222A 10%, #1b9b38 90%); /* W3C */
font-family: 'Raleway', sans-serif;
}

p {
	color:#CCC;
}

.spacing {
	padding-top:7px;
	padding-bottom:7px;
}
.middlePage {
	width: 680px;
    height: 500px;
    position: absolute;
    top:0;
    bottom: 0;
    left: 0;
    right: 0;
    margin: auto;
}

.logo {
	color:#CCC;
}
        .hh{
            height:auto;
        }
        .form-control{
            width: 360px;
        }
                
  </style>

</head>
    <link href='http://fonts.googleapis.com/css?family=Raleway:500' rel='stylesheet' type='text/css'>

<body>
<div class="middlePage">
<div class="page-header">
  <h1 class="logo">ALL-Fest <small>Come Join the party!</small></h1>
</div>

<div class="panel panel-info hh">
  <div class="panel-heading">
    <h3 class="panel-title" id="regname">Please Register</h3>
  </div>
  <div class="panel-body">
  
  <div class="row">
  
<div class="col-md-5" >
<a href="https://www.facebook.com/"><img src="http://techulus.com/buttons/fb.png" /></a><br/>
<a href="https://plus.google.com/collections/featured"><img src="http://techulus.com/buttons/gplus.png" /></a>
</div>

    <div class="col-md-7" style="border-left:1px solid #ccc;">
<form id="reg" action="reg.php" method="post" role="form" name="reg_form" onSubmit="return validateForm()">
                                    <div class="form-group">
										<input type="text" name="name" id="name" required tabindex="1" class="form-control" placeholder="Enter Name" value="">
									</div>
									<div class="form-group">
										<input type="text" name="phno" id="phno" required  tabindex="1" class="form-control" placeholder="Enter PhoneNo." value="">
									</div>
									<div class="form-group">
										<input type="email" name="email" id="email" required  tabindex="1" class="form-control" placeholder="Enter Email_ID" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" required  tabindex="2" class="form-control" placeholder="Password">
									</div>
									<div class="form-group">
										<input type="password" name="cpassword" required id="cpassword" tabindex="2" class="form-control" placeholder="Confirm Password">
									</div>
									<div class="form-group">
										<div class="row" style="text-align:center;">
												<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="btn btn-success btn-sm " value="Register Now">
										</div>
									</div>
								</form>
      </div>
    </div>
    </div>
</div>
</div>
<script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        
        function validateForm() {
            alert("kkkkk");
    var x = document.forms["reg"]["password"].value;
            var y = document.forms["reg"]["cpassword"].value;
            console.log(x);
            console.log(y);
               //alert("kk")
    if (x != y) {
        alert("Passwords doesn't match please retype");
        document.getElementById("password").value="";
        document.getElementById("cpassword").value="";
        return false;
        
    }
               
}
    </script>
    
    
    
    </body>
    
</html>