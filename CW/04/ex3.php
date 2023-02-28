<html>
    <head>
        <title>CW04 | Ex3</title>
        <style>
            body{
                background-color:lightgray;
                color:blue;
            }
            h1{
                font-style:italic;
            }
        </style>
    </head>
    <body>
        <h1>Classwork 4  - Exercise 3 </h1>
        <h3>Below, the input given in the text field will be taken as the input for the triangle() function</h3>
        <form method="post" action="<?php print $_SERVER['PHP_SELF']?>">
            Enter a size  <input type = "text" name="size" enctype="multipart/form-data"> <br><br>
            <input type = "submit" value="Submit">
        </form>

    </body>
</html>


<?php
    
    
    if(!isset($_POST['size'])){
        echo "Please enter a size!";

        
    } else {
        $size = $_POST['size'];
        triangle($size);
    }

    function triangle($size){
        if ($size <= 0){
            echo "Size should be at least 1. Please try again!";
    
        } else {
            for ($i = 0; $i <= $size; $i++) {
                for ($j = 0; $j < $i; $j++) {
                echo "*";
                }
                echo "<br>";
            }
        }
    }

    echo '<br><br><a href="index.php">Back to Main Page</a>';
    



?>