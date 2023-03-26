
<!-- 
=======================================================================
***********************************************************************
Author : Shivani Kolanu
Assignment : Homework Assignment 3
Course : Web Programming
Assignment Description : Recreating a dating app called nerdLuv provided by the instructor.
Filename : common.php
Did below extra features :
Extra Feature #1. Robust page with form validation
Extra feature #2. User photos
************************************************************************
======================================================================== -->


<?php

    function name_check($name){ 
        $regex_name = '/^$/';
        if(preg_match($regex_name, $name)) {
            return false;
        }
        else {
            return true;
        }

        //This function checks if the input name is in correct format or not.

    }
    function age_check($age){
        $regex_age = '/^[0-9]*$/';
        if(preg_match($regex_age,$age)){
            if($age >=0 && $age <= 99){
                return true;
            } else{
                return false;
            }
        }
        else{
            return false;
        }
        //This function checks if the input age is in correct format or not.
    }
    function gender_check($gender){
        $regex_gender = '/^[MFmf]*$/';

        if(preg_match($regex_gender,$gender)){
            return true;
        } else{
            return false;
        }
        //This function checks if the input gender is correct or not.
    }
    function personality_check($per){
        $per_arr = str_split($per);
        if((strlen($per) == 4) && (($per_arr[0] == 'I') || ($per_arr[0] == 'E')) && (($per_arr[1] == 'N') || ($per_arr[1] == 'S')) 
        && (($per_arr[2] == 'F') || ($per_arr[2] == 'T')) && (($per_arr[3] == 'J') || ($per_arr[3] == 'P')) ){
            return true;
        } else{
            return false;
        }
        //This function checks if the input personality is in correct format or not.
    }

    function os_check($os){
        if(($os == "Windows") || ($os == "Mac") || ($os == "Linux") ){
            return true;
        } else{
            return false;
        }
        //This function checks if the input OS is correct or not.
    }
    function min_max($min,$max){
        $regex_minmax = '/^[0-9]*$/';
        if(preg_match($regex_minmax,$min) && (preg_match($regex_minmax,$max)) && ($min >=0 && $min <= 99) && ($max >=0 && $max <= 99) && ($min <= $max) ){
            return true;
        } else{
            return false;
        }
        //This function checks if the input min and max is in correct format or not.
    }

    function check_user($name){
        $contents = file_get_contents("singles.txt");
        $exploded_values = explode("\n",$contents);
        
        $entire_data_array = array(); // Create an empty array to hold the array of arrays

        foreach ($exploded_values as $line) {
            $values = explode(",", $line); // Split each line into an array of values based on a comma
            $entire_data_array[] = $values; // Add the array of values to the array of arrays
        }


        foreach ($entire_data_array as $arr){
            if(trim($arr[0]) == trim($name)){

                return false;

            }

        }
        return true;

        //This function checks if the input user is already registered into our system or not.

    }

?>