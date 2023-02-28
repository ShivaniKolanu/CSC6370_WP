<html>
    <head>
        <title>CW04 | Ex5</title>
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
        <h1>Classwork 4  - Exercise 5 </h1>
        <h3>Below, the input given in the text field will be taken as the input for the countWords() function</h3>
        <h4>This function counts the number of individual words in a string.</h4>
        <form method="post" action="<?php print $_SERVER['PHP_SELF']?>">
            Enter a string  <input type = "text" name="str" enctype="multipart/form-data"> <br><br>
            <input type = "submit" value="Submit">
        </form>

    </body>
</html>


<?php

    if(!isset($_POST['str'])){
        echo "Please enter a string!";

        
    } else {
        $str = $_POST['str'];
        countWords($str);
    }

    function countWords($str){
        $str = strtolower($str);

        $words_arr = explode(' ',$str);
        $counts = array();

        // $str = hi hello and welcome and enjoy!
        foreach($words_arr as $i){
            if(isset($counts[$i])){
                $counts[$i]++;

            } else {
                $counts[$i] = 1;
            }
        }

        if(strlen($str) == 0){
            echo "Please enter a string and try again.";
        } else {
            echo "The occurences of each word is as below :<br>";
            print_r($counts);

        }


    }

    echo '<br><br><a href="index.php">Back to Main Page</a>';


?>