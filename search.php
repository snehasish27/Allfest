<?php
        
$event=[];
               
            $conn = mysqli_connect('localhost','root','','allfest');
            
            if(! $conn )
            {
               die('Could not connect: ' . mysqli_error($conn));
            }
                        
            
            $cname = $_POST['cname'];
            $month = $_POST['month'];
            $city = $_POST['city'];
            //echo  $name;
$sql = "SELECT * FROM event WHERE c_name='{$cname}' AND month='{$month}';";
            
            $retval = mysqli_query($conn,$sql);
            if(! $retval )
            {
                echo "2";            
            }
            else{
                while($row = mysqli_fetch_assoc($retval))
                {
                    $colname=$row['c_name'];
                    $festname=$row['name'];
                    $orgteam=$row['orgteam'];
                    $url=$row['url'];
                    $etype=$row['etype'];
                    $festmonth=$row['month'];
                    
            } 
            $event[]=[
            "colname"=>$colname,
            "festname"=>$festname,
                "orgteam"=>$orgteam,
                "url"=>$url,
                "etype"=>$etype,
                "festmonth"=>$festmonth
        ];
    
}

            echo json_encode($event);
            mysqli_close($conn);
        ?>