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
  background-image:url(image/college_reg1.jpg);
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
  <h1 class="logo">College Registration</h1>
</div>

<div class="panel panel-info hh">
  <div class="panel-heading">
    <h3 class="panel-title" id="regname">Congratulation</h3>
  </div>
  <div class="panel-body">
  
  <div class="row" style="color:black;">
      <?php
         
               
            $conn = mysqli_connect('localhost','root','','allfest');
            
            if(! $conn )
            {
               die('Could not connect: ' . mysqli_error($conn));
            }
                        
            
            $orgname = $_POST['orgname'];
            $emailid = $_POST['email'];
            $name = $_POST['name'];
            $mobno = $_POST['mno'];
            $password = $_POST['password'];
            
            //echo $name;
            //echo $username;
            //mysqli_select_db('allfest');
            $check = "SELECT orgname FROM creg WHERE orgname='{$orgname}';";
            $checkval = mysqli_query($conn,$check);
            $row=$checkval->fetch_assoc();
            //echo $row["orgname"];
            if($row["orgname"]==$orgname)
            {
                echo "<p style=\"font-size: 20px; font-weight: bold;  color: #2c3e50; text-align: center; padding-top:15px; padding-bottom:15px;\">Hey, \"<b>$orgname</b>\" is Already Registered </p>";
                echo "<br>
      <div style=\"text-align: center;\">
          <p tyle=\"font-size: 18px; font-weight: bold;  color: #2c3e50; text-align: center;\"> Click here Sign In</p>
          <a href=\"addevent.php\"><button type=\"button\" class=\"btn btn-info\" >Sign In</button></a>
                </div>";
                
            }
            else
            {
            
            $sql = "INSERT INTO creg (orgname,emailid,name,mobno,password)
VALUES('$orgname','$emailid','$name','$mobno','$password');";
            
            $retval = mysqli_query($conn,$sql);
            if(! $retval )
            {
                echo"<h2 style=\"tet-align:center;\">Sorry Server Error</h2>";
            }
      else{
            echo "<p style=\"font-size: 20px; font-weight: bold;  color: #2c3e50; text-align: center; padding-top:15px; padding-bottom:15px;\">Hi, \"<b>$orgname</b>\" You are registered Successfully </p>";
          echo "<br>
          <div class=\"row\">
      <div style=\"text-align: center;\" class=\"col-md-6\">
          <p tyle=\"font-size: 18px; font-weight: bold;  color: #2c3e50; text-align: center;\"> Click here to add an Event</p>
          <a href=\"addevent.php\"><button type=\"button\" class=\"btn btn-info\" >ADD Event</button></a>


      </div>
      <div style=\"text-align: center;\" class=\"col-md-6\">
          <p tyle=\"font-size: 18px; font-weight: bold;  color: #2c3e50; text-align: center;\"> Click here Explore</p>
          <a href=\"index.php\"><button type=\"button\" class=\"btn btn-success\" >Explore</button></a>
</div>
</div>
      ";
      }
      }
            mysqli_close($conn);
        ?>
      
    </div>
</div>
</div>
<script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
    
    
    </body>
    
</html>
