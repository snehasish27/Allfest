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
  <h1 class="logo">ALL-Fest <small>The Party Updator</small></h1>
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
                        
            
            $name = $_POST['ename'];
            $orgteam = $_POST['tname'];
            $c_name = $_POST['cname'];
            $url = $_POST['eurl'];
            $etype = $_POST['etype'];
            $satt = $_POST['satt'];
            $month = $_POST['month'];
            $s_date = $_POST['sdate'];
            $e_date = $_POST['edate'];
            //echo $name;
            //echo $username;
            //mysqli_select_db('allfest');
            
            $sql = " INSERT INTO event (name,orgteam,c_name,url,etype,satt,month,s_date,e_date)
VALUES('$name','$orgteam','$c_name','$url','$etype','$satt','$month','$s_date','$e_date');";
            
            $retval = mysqli_query($conn,$sql);
            if(! $retval )
            {
                echo"<h2>Sorry Server Error</h2>";
            }
            echo "<p style=\"font-size: 20px; font-weight: bold;  color: #2c3e50; text-align: center; padding-top:15px; padding-bottom:15px;\">Hey \"<b>$name</b>\" Fest's Details Added Successfully </p>";
            
            mysqli_close($conn);
        ?>
      <br>
      <div style="text-align: center;">
          <a href="index.php"><button type="button" class="btn btn-info" >Home</button></a></div>


      </div>
    </div>
</div>
</div>
<script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
    
    
    </body>
    
</html>
