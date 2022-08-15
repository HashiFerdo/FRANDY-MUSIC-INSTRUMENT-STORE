<?php
        // $connection = mysqli_connect(dbserrve, dbuser, dbpass, dbnme);

        $connection = mysqli_connect('localhost','root','','driverdb');

        //mysqli_connect_errno(); mysqli_connect_error();

        //Checking the connection 

        if (mysqli_connect_errno()){
            die('Database conection failed' . mysqli_connect_error());
            echo "Connection error";
        }
        else{
            echo "";
        }

?>