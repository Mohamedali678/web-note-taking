

<?php

    include "connection.php";

    if(isset($_GET["id"])){

        $id = $_GET["id"];

        $deleteQuery = "Delete From notes Where ID = '$id' ";

        $check = $dbConnection->query($deleteQuery);

        if($check){
            header("Location: index.php");
        }

        else {
            echo $dbConnection->connect_error;
        }
    }
?>