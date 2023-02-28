<html>
    <head>
        <title>CW04 | Ex4</title>
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
        <h1>Classwork 4  - Exercise 4 </h1>
        <h3>Below, the input given in the text field will be taken as the input for the word_count() function</h3>
        <h4> This function counts the number of words in a given string.</h4>
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
        word_count($str);
    }

    function word_count($str){

        $count=0;

        $str = trim($str);
        
        for($i=0;$i<strlen($str);$i++){
            
            if($str[$i] == " "){
                $count++;
            }
        }

        if($count == 0 && $str == ''){
            echo "Enter a string!";
        } else {
           
            print "Number of words is ".($count+1);
        }

    }

    echo '<br><br><a href="index.php">Back to Main Page</a>';


?>
