
<!-- 
=======================================================================
***********************************************************************
Author : Shivani Kolanu
Assignment : Homework Assignment 3
Course : Web Programming
Assignment Description : Recreating a dating app called nerdLuv provided by the instructor.
Filename : index.php
Did below extra features :
Extra Feature #1. Robust page with form validation
Extra feature #2. User photos
************************************************************************
======================================================================== -->
<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
	header("location:login.php");
	exit;
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>NerdieLuv</title>
        <link rel="stylesheet" href="nerdieluv.css">
    </head>
    <body>
        <img src="img/logo.png" alt="logo">
        <h1>Welcome!</h1>
        <!-- Redirects to the Signup page -->
        <a href="signup.php">
            <img src = "img/signup.png" alt="signin">
            Sign Up for a new account
        </a>
        <br><br>
        <!-- Redirects to the Login Page i.e. matches.php -->
        <a href="matches.php">
            <img src="img/signin.png" alt="signin">
            Check your matches
        </a>
        <p>
        This page is for single nerds to meet and date each other! <br>Type in your personal information and wait for the nerdly luv to begin! <br>Thank you for using our site.
        <br><br>
        Results and page (C) Copyright NerdLuv Inc.
        </p>
        <br>
        <a href="logout.php">
            <img src="img/logout.png" alt="logout">
            Logout
        </a>
        <br><br><br>

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