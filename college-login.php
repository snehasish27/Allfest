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
	height:700px;
 background-image: url(image/college_login.jpg);
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
  <h1 class="logo">College Sign In</h1>
</div>

<div class="panel panel-info hh">
  <div class="panel-heading">
    <h3 class="panel-title">Please Sign In</h3>
  </div>
  <div class="panel-body">
  
  <div class="row">
  
<div class="col-md-12" style="border-left:1px solid #ccc;">
<form id="login-form" action="clogin.php" method="post" role="form" style="display: block;" name="loginform">
									<div class="form-group">
										<input type="text" name="email" id="email" required tabindex="1" class="form-control" placeholder="Enter Email Address" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" required tabindex="2" class="form-control" placeholder="Password">
									</div>
									<div class="form-group">
										<input type="checkbox" tabindex="3" class="" style="margin-left:25px;" name="remember" id="remember">
										<label style="color:black;" for="remember"> Remember Me</label>
									</div>
									<div class="form-group">
										<div class="row" style="text-align:center;">
				
												<input type="submit" name="login-submit" id="login" tabindex="4" class="btn btn-info" value="Sign In" >

										</div>
									</div>
									
								</form>
</div>
    
</div>
    
</div>
</div>



</div>
</body>
    
</html>