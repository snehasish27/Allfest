<?php
         
               
            $conn = mysqli_connect('localhost','root','','allfest');
            
            if(! $conn )
            {
               die('Could not connect: ' . mysqli_error($conn));
            }
                        
            
            $name = $_POST['name'];
            $city = $_POST['city'];
            $phno = $_POST['phno'];
            $comment = $_POST['comment'];
            //echo  $name;
$sql = "INSERT INTO feedback (name,city,phno,comment)
VALUES('$name','$city','$phno','$comment');";
            
            $retval = mysqli_query($conn,$sql);
            if(! $retval )
            {
                echo "2";            
            }
            else {
                echo "1";

            }
            mysqli_close($conn);
        ?>


