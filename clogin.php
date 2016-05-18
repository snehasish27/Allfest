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
        .row{
            color:black;
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
  <h1 class="logo">College Sign In</h1>
</div>

<div class="panel panel-info hh">
  <div class="panel-heading">
    <h3 class="panel-title">Welcome</h3>
  </div>
  <div class="panel-body">
  
  <div class="row">
<?php
         
               
            $conn = mysqli_connect('localhost','root','','allfest');
            //echo "hisjds";
            if(! $conn )
            {
               die('Could not connect: ' . mysqli_error($conn));
            }
            $username = $_POST['email'];
            $password = $_POST['password'];
            //echo $username;
            //mysql_select_db('allfest');
            $sql = "SELECT orgname FROM creg WHERE emailid='{$username}' and password='{$password}';";
            //echo $sql;
            $retval=NULL;
            $retval = mysqli_query($conn,$sql);
            //echo $retval;
            $row = $retval->fetch_assoc();
            $name=$row["orgname"];
            echo $name;
            if(!$retval)
            {
               echo "<p style=\"font-size: 24px; font-weight: bold;  color: #2c3e50; text-align: center; padding-top:15px; padding-bottom:15px;\">Sorry Wrong Username and Password</p>";
            }
            else
            {
                echo "<p style=\"font-size: 24px; font-weight: bold;  color: #2c3e50; text-align: center; padding-top:15px; padding-bottom:15px;\">HI, $name </p>";
            }
            mysqli_close($conn);
        ?>
      <br>
      <div class="row">
      <div style="text-align: center;" class="col-md-6">
          <p tyle="font-size: 18px; font-weight: bold;  color: #2c3e50; text-align: center;"> Click here to add an Event</p>
          <a href="addevent.php"><button type="button" class="btn btn-info" >ADD Event</button></a>


      </div>
      <div style="text-align: center;" class="col-md-6">
          <p tyle="font-size: 18px; font-weight: bold;  color: #2c3e50; text-align: center;\"> Click here Explore</p>
          <a href="index.php"><button type="button" class="btn btn-success" >Explore</button></a>
</div>
</div>

    
</div>
    
</div>
</div>



</div>
</body>
    
</html>
