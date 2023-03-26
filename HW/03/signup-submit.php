<!-- 
=======================================================================
***********************************************************************
Author : Shivani Kolanu
Assignment : Homework Assignment 3
Course : Web Programming
Assignment Description : Recreating a dating app called nerdLuv provided by the instructor.
Filename : signup-submit.php
Did below extra features :
Extra Feature #1. Robust page with form validation
Extra feature #2. User photos
************************************************************************
======================================================================== -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>NerdieLuv</title>
        <link rel="stylesheet" href="nerdieluv.css">
    </head>
    <body>
        <img src="img/logo.png" alt="logo">

        <?php
            // Calling the common functions from a different php file to validate the inputs.

            include 'common.php';
            $name_checker = name_check($_POST["name"]);
            $age_checker = age_check($_POST["age"]);
            $gender_checker = gender_check($_POST["gender"]);
            $personality_checker = personality_check($_POST["per_type"]);
            $os_checker = os_check($_POST["os"]);
            $min_max_checker = min_max($_POST["min"], $_POST["max"]);
            $check_user = check_user($_POST["name"]);
            if($check_user && $name_checker && $age_checker && $gender_checker && $personality_checker && $os_checker && $min_max_checker){ ?>
                <!-- This part of the code gets executed when all the inputs are in required format. -->
                <h1>Thank you!</h1>
                <br>
                Welcome to NerdieLuv, <?php print $_POST["name"] ?> 
                <br>
                Now <a href="matches.php"> log in to see your matches! </a>
                <p>
                This page is for single nerds to meet and date each other! <br>Type in your personal information and wait for the nerdly luv to begin! <br>Thank you for using our site.
                <br><br>
                Results and page (C) Copyright NerdLuv Inc.
                </p>
                <a href="index.php">
                <img src="img/back.png" alt="back">
                Back to front page
                </a>

                <?php 
                    // Importing the data, then concatenating new data and writing back to the file.
                    $old_data = file_get_contents("singles.txt");

                    $data = "\n".$_POST['name']. "," .$_POST['gender'].",".$_POST['age'].",".$_POST['per_type'].",".$_POST['os'].",".$_POST['min'].",".$_POST['max'];

                    $final_data = $old_data.$data;

                    file_put_contents("singles.txt",$final_data);

                    $name_for_img = str_replace(" ","_",trim($_POST['name']));
                    $name_updated = strtolower($name_for_img);

                    $dir = "img/";
                    $file = $dir.$name_updated.".jpeg";
                    move_uploaded_file($_FILES["photo"]["tmp_name"],$file);
                ?>
                        
    <?php   } else{ ?>
                <!-- This part of code gets executed when any of the input is not in required format -->

                <h1>Error! Invalid data.</h1>
                <p>
                We're Sorry. You submitted invalid user information. Please go back and try again.<br><br>
                This page is for single nerds to meet and date each other! <br>Type in your personal information and wait for the nerdly luv to begin! <br>Thank you for using our site.
                <br><br>
                Results and page (C) Copyright NerdLuv Inc.
                </p>
                <a href="index.php">
                <img src="img/back.png" alt="back">
                Back to front page
                </a>

                
            <?php }

        ?>

        <br><br>

        <div class="validators">
            <a href="https://validator.w3.org/">    
                <img src="img/valid-xhtml11.png" alt="html validator">
            </a>

            <p>
                <a href="http://jigsaw.w3.org/css-validator/check/referer">
                    <img style="border:0;width:88px;height:31px"
                        src="img/vcss.gif"
                        alt="Valid CSS!" />
                </a>
            </p>
        </div>


    </body>
</html>