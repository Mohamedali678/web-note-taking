<?php 


    $dbConnection = new mysqli("localhost", "root", "", "noteDb");

    if($dbConnection == true){
       
    }
    else {
        echo $dbConnection->connect_error;
    }


?>