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
            background-image: url(image/event.jpg);
            font-family: 'Raleway', sans-serif;
        }
        
        p {
            color: #CCC;
        }
        
        .spacing {
            padding-top: 7px;
            padding-bottom: 7px;
        }
        
        .middlePage {
            width: 680px;
            margin-left: auto;
            margin-top: 50px;
            margin-right: auto;
        }
        
        .logo {
            color:aliceblue;
        }
        
        .hh {
            height: auto;
        }
        
        .form-control {
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
            <h1 class="logo">#ALL-Fest<small>The party updator</small></h1>
        </div>

        <div class="panel panel-info hh">
            <div class="panel-heading">
                <h3 class="panel-title">Update The Fest's Details</h3>
            </div>
            <div class="panel-body">

                <div class="row">

                    <div class="col-lg-12 align-center" style="text-align:center;">
                        <form id="addevent" action="event.php" method="post" role="form" name="addevent" onSubmit="return validateForm()">
                            <div class="form-group">
                                <input type="text" name="ename" id="ename" required tabindex="1" class="form-control" placeholder="Enter The Fest's Name" value="">
                            </div>
                            <div class="form-group">
                                <input type="text" name="tname" id="tname" required tabindex="1" class="form-control" placeholder="Organizing Club/Team" value="">
                            </div>
                            <div class="form-group">
                                <input type="text" name="cname" id="cname" required tabindex="1" class="form-control" placeholder="College/University name" value="">
                            </div>
                            <div class="form-group">
                                <input type="text" name="eurl" id="eurl" required tabindex="1" class="form-control" placeholder="Enter Fest's Website URL" value="">
                            </div>
                            <div class="form-group">
                                <select name="etype" id="etype" required tabindex="1" class="form-control">
                                    <option value="NONE" selected>-Select The Fest Type-</option>
                                    <option value="technical">Technical</option>
                                    <option value="management">Management</option>
                                    <option value="cultural">Cultural</option>
                                    <option value="exhibition">Exhibition</option>
                                    <option value="techno-management">Techno-Management</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" name="satt" id="satt" required tabindex="1" class="form-control" placeholder="Enter Some attractive events(separated by ,)(E.g. robowar,coding,dance...)" value="">
                            </div>
                            <div class="form-group">
                                <select name="month" id="month" required tabindex="1" class="form-control">
                                    <option value="NONE" selected>-Select The Fest's Month-</option>
                                    <option value="January">January</option>
                                    <option value="February">February</option>
                                    <option value="March">March</option>
                                    <option value="April">April</option>
                                    <option value="May">May</option>
                                    <option value="June">June</option>
                                    <option value="July">July</option>
                                    <option value="August">August</option>
                                    <option value="September">September</option>
                                    <option value="October">October</option>
                                    <option value="November">November</option>
                                    <option value="December">December</option>
                                </select>
                            </div>



                            <div class="form-group text-left">
                                <label style="color:black; text-align:left; margin-left:24px;">Enter Event's Starting Date</label>
                                <input type="date" name="sdate" id="sdate" required tabindex="1" class="form-control" placeholder="Enter vEvent's Starting Date" value="">

                            </div>
                            <div class="form-group text-left        background-color: aqua;
">
                                <label style="color:black; text-align:left;margin-left:24px;">Enter Event's Ending Date</label>
                                <input type="date" name="edate" id="edate" required tabindex="1" class="form-control" placeholder="Enter Event's Ending Date" value="">

                            </div>
                            <div class="form-group">
                                <div class="row" style="text-align:center;">
                                    <input type="submit" name="login-submit" id="login" tabindex="4" class="btn btn-danger form-control" value="ADD Event">

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
            var x = document.forms["addevent"]["etype"].value;
            if (x == 'NONE') {
                alert("please Select an Event Type");
                var y = document.forms["addevent"]["month"].value;
                if (y == 'NONE') {
                    alert("please Select a month");
                    return false;

                }

            }
    </script>

</body>

</html>