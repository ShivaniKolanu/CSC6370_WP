<html>
    <head>
        <title>CW04 | Ex6</title>
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
        <h1>Classwork 4  - Exercise 6 </h1>
        <h3>Below, the input given in the text fields will be taken as the inputs for the remove_all() function</h3>
        <h4>This function removes the occurences of the given character in the given string.</h4>
        <form method="post" action="<?php print $_SERVER['PHP_SELF']?>">
            Enter a string &nbsp;&nbsp;&nbsp;&nbsp; <input type = "text" name="str" enctype="multipart/form-data"> <br><br>
            Enter a character  <input type = "text" name="char" enctype="multipart/form-data"> <br><br>
            <input type = "submit" value="Submit">
        </form>

    </body>
    
</html>

<?php

    if(!isset($_POST['str']) || !isset($_POST['char'])){
        echo "Please enter a string and a character!";

        
    } else {
        $str = $_POST['str'];
        $char = $_POST['char'];
        remove_all($str, $char);
    }

    function remove_all($str, $char){

        $temp="";
        $str = strtolower($str);
        $char = strtolower($char);


        for($i = 0; $i<strlen($str);$i++){
            if($str[$i] != $char){
                $temp = $temp.$str[$i];
            }
        }

        if($str == '' || $char == ''){
            echo "String or the character is missing. Please check and try again";
        } else{
            echo "After removing the given char, the string will be '".$temp."'";

        }


        
    }

    echo '<br><br><a href="index.php">Back to Main Page</a>';


?>
