<?php 
    $connection = mysqli_connect('localhost','root' , '' , 'login_sample_db');
    
    //Checking the connection
    if(mysqli_connect_errno()) {
        die('Database connection failed' . mysqli_connect_errno());
    }
    else{
       // echo "Connection Successful.";
    }

?>