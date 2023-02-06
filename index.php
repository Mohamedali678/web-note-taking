<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Note</title>

    <link  rel="stylesheet" href="style.css">

    <script src="https://code.iconify.design/iconify-icon/1.0.3/iconify-icon.min.js"></script>
    
</head>
<body>

    <div class="left-side">
        <h1>Noty</h1>
        <a href="add_note.php"><iconify-icon icon="material-symbols:add"></iconify-icon></a>
    </div>


    <div class="container">
        <h1>Notes</h1>

        <!-- <div class="boxes"> -->


        <?php 
                       //     $htmlData .= "<div class='box1' style='background-color: ".$data["color"]." ' > ";


            include "connection.php";


            $selectQuery = "select * from notes";

            $checking = $dbConnection->query($selectQuery);

            $htmlData = "<div class='boxes'>";

            if($checking == true){

                while($data = $checking->fetch_assoc()){
                   
                    $boxColor = $data["color"];

                    $htmlData .= "<div class='box1' style='background-color: ".$boxColor."  ' >";
                    
                    $htmlData .= "<h1 style='color: white' >" . $data["title"] . "</h1>";
                    $htmlData .= "<p style='color: white'>" . $data["description"] . "</p>";
                    $htmlData .= "<div class='icon'>";

                    $delete = "delete.php?"  . "&id=" . $data["ID"];

                    $htmlData .= "<a href=' ".$delete." '> <iconify-icon icon='material-symbols:edit'></iconify-icon>  </a> ";
                    $htmlData .= "</div>";
                    $htmlData .= "</div>";
                  
                    
                }
                echo $htmlData;
                
            }
            else {
                echo $dbConnection->connect_error;
            }
        
        ?>

        <!-- <div class="box1">
            <h3>Going to the gym</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim dolor rem vero.</p>
            
            <div class="icon">
            <a href=""><iconify-icon icon="material-symbols:edit"></iconify-icon></a>
            
        </div>
        </div>
        <div class="box1">
            <h3>Going to the gym</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim dolor rem vero.</p>
            <div class="icon">
            <a href=""><iconify-icon icon="material-symbols:edit"></iconify-icon></a>
            
        </div>
        </div>
        <div class="box1">
            <h3>Going to the gym</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim dolor rem vero.</p>
            <div class="icon">
            <a href=""><iconify-icon icon="material-symbols:edit"></iconify-icon></a>
            
        </div>
        </div>

        </div> -->

    </div>
    
</body>
</html>