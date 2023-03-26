<!-- 
=======================================================================
***********************************************************************
Author : Shivani Kolanu
Assignment : Homework Assignment 3
Course : Web Programming
Assignment Description : Recreating a dating app called nerdLuv provided by the instructor.
Filename : matches-submit.php
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
            // Calling the common functions from a different php file.
            include 'common.php';
            $name_checker = name_check($_GET["name"]);
            $check_user = check_user($_GET["name"]);

            if($name_checker && !$check_user){ ?>
                <!-- This part gets executed if all formats are correct. -->


                <h1>Matches for <?php print $_GET["name"]; ?></h1>

                <?php
                // Asking system to not print any warnings. (Mostly not being used)
                error_reporting(E_ALL ^ E_WARNING);
                ?>

                <?php
                    $name = $_GET["name"];
                    $contents = file_get_contents("singles.txt");
                    $exploded_values = explode("\n",$contents);
                    
                    $entire_data_array = array(); // Create an empty array to hold the array of arrays
                    $main_person = array();

                    foreach ($exploded_values as $line) {
                        $values = explode(",", $line); // Split each line into an array of values based on a comma
                        $entire_data_array[] = $values; // Add the array of values to the array of arrays
                    }


                    foreach ($entire_data_array as $arr){
                        if(trim($arr[0]) == trim($name)){

                            $main_person = $arr;
                        }
                    }
                    // print_r($main_person);

                    $main_per = str_split($main_person[3]); //istp

                    foreach($entire_data_array as $arr){ //effp
                        if(isset($arr[3])){
                            $arr_per = str_split($arr[3]);
                        }
                        $i = 0; //1 2 3
                        $count = 0; //
                        foreach($arr_per as $a){
                            if($a == $main_per[$i]){
                                $count += 1;
                                
                            }
                            $i+=1;
                        }
                        $name_for_img = str_replace(" ","_",trim($arr[0]));
                        $name_updated = strtolower($name_for_img);

                        if(isset($main_person[0]) && isset($main_person[1]) && isset($main_person[2]) &&isset($main_person[3]) && isset($main_person[4]) && isset($main_person[5]) &&isset($main_person[6]) &&
                            isset($arr[0]) && isset($arr[1]) && isset($arr[2]) && isset($arr[3]) && isset($arr[4]) && isset($arr[5])&& isset($arr[6]) ){
                            if(((trim($main_person[0]))!= trim($arr[0])) && (((trim($main_person[1])))!= trim($arr[1])) &&
                                ((trim($main_person[2])>=trim($arr[5])))&&(trim($main_person[2])<= trim($arr[6]))&&(trim($arr[2] >= trim($main_person[5]))) && (trim($arr[2]) <= trim($main_person[6]))&&
                                (trim($main_person[4]) == trim($arr[4])) && ($count > 0)){
                                    // print_r($arr);
                                    echo "
                                    <div class = 'match'>
                                        <p>
                                            <img src = 'img/".$name_updated.".jpeg' alt='match'> ";
                                            print($arr[0]);
                                        echo "</p>
                                        <ul>
                                            <strong>
                                                gender:
                                            </strong>";
                                            print($arr[1]);
                                        echo "</ul>
                                        <ul>
                                            <strong>
                                                age:
                                            </strong>";
                                            print($arr[2]);
                                        echo "</ul>
                                        <ul>
                                            <strong>
                                                type:
                                            </strong>";
                                            print($arr[3]);
                                        echo "</ul>
                                        <ul>
                                            <strong>
                                                OS:
                                            </strong>";
                                            print($arr[4]);
                                        echo "</ul>

                                    </div>
                                    ";
                            }
                        }


                    }

                ?>

        <?php } else{ ?>

            <!-- This part gets executed if any of the formats are failed. -->

            <h1>Error! Invalid data.</h1>
                <p>
                We're Sorry. You submitted invalid user information. Please go back and try again.<br><br>
                </p>

        <?php }
        ?>
        <p>
            This page is for single nerds to meet and date each other! <br>Type in your personal information and wait for the nerdly luv to begin! <br>Thank you for using our site.
            <br><br>
            Results and page (C) Copyright NerdLuv Inc.
        </p>
        <a href="index.php">
            <img src="img/back.png" alt="back">
            Back to front page
        </a>
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