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
	height:800px;
  background-image:url(image/college_reg.jpg);
    background-size:cover;
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
	color:#0fdd95;
}
        .hh{
            height:auto;
        }
        .form-control{
            width: 600px;
            margin-left: 25px;
            margin-right: 25px;
        }
                
  </style>

</head>
    <link href='http://fonts.googleapis.com/css?family=Raleway:500' rel='stylesheet' type='text/css'>

<body>
<div class="middlePage">
<div class="page-header">
  <h1 class="logo">College Registration</h1>
</div>

<div class="panel panel-info hh">
  <div class="panel-heading">
    <h3 class="panel-title">Bring your college to the stage</h3>
  </div>
  <div class="panel-body">
  
  <div class="row">
  
<div class="col-lg-12 align-center" style="text-align:center;">
<form id="creg" action="creg.php" method="post" role="form" name="creg" onSubmit="return validateForm()">
									<div class="form-group">
										<input type="text" name="orgname" id="orgname" required tabindex="1" class="form-control" placeholder="Organization/College Name" value="">
									</div>
                                    <div class="form-group">
										<input type="text" name="email" id="email" required tabindex="1" class="form-control" placeholder="Your Email_ID ( Strongly recommend an official email id )" value="">
									</div>
     <div class="form-group">
										<input type="text" name="name" id="name" required tabindex="1" class="form-control" placeholder="Your name" value="">
									</div>
    
    <div class="form-group">
										<input type="text" name="mno" id="mno" required tabindex="1" class="form-control" placeholder="Your Mobile No." value="">
									</div>
    <div class="form-group">
										<input type="password" name="password" id="password" required  tabindex="2" class="form-control" placeholder="Enter Password">
									</div>
									<div class="form-group">
										<input type="password" name="cpassword" required id="cpassword" tabindex="2" class="form-control" placeholder="Confirm Password">
									</div>
    
    
   								<div class="form-group">
										<div class="row" style="text-align:center;">
												<input type="submit" name="login-submit" id="login" tabindex="4" class="btn btn-success" value="Register" >
                                            <br>
                                            <br>
                                            <div style="color:black;">
                                            Already Registered<a href="college-login.php">   Sign_In</a>
                                                </div>

										</div>
									</div>
    
									
								</form>
</div>
    
</div>
    
</div>
</div>



</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        
       function validateForm() {
            //alert("kkkkk");
    var x = document.forms["creg"]["password"].value;
            var y = document.forms["creg"]["cpassword"].value;
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