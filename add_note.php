<?php


    include "connection.php";

    if(isset($_POST["submit"])){

        $title = $_POST["title"];
        $description = $_POST["description"];
        $color = $_POST["color"];


        //putting data into Database.

        $insertQuery = "insert into notes (title, description, color) 
        values ('$title', '$description', '$color') ";


        $checkingQuery = $dbConnection->query($insertQuery);

        if($checkingQuery == true){
           header("Location: index.php");
        }
        else {
            echo $dbConnection->connect_error;
        }

    }




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Note</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

        <div class="container">
            <h1>Add Note</h1>

        <form method="post">

            <input type="text" placeholder="Enter title" name="title"><br>
            <input type="text" placeholder="Enter description" name="description"><br>
            <input type="color" class="color" placeholder="Enter description" name="color"><br>
            <input type="submit" class="btn" value="Save" name="submit"><br>
        </form>

        </div>
    
</body>
</html>