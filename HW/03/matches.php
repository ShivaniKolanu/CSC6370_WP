<!-- 
=======================================================================
***********************************************************************
Author : Shivani Kolanu
Assignment : Homework Assignment 3
Course : Web Programming
Assignment Description : Recreating a dating app called nerdLuv provided by the instructor.
Filename : matches.php
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
        if (isset($_GET['name'])) {
          $name = urlencode($_GET['name']); // Encoding the name parameter for safe URL use
          header("Location: matches-submit.php?name=$name"); // Redirecting to the matches-submit.php page with the name parameter
          exit; // Making sure to exit the script after the redirect to prevent further execution
        }
        ?>

        <form method="get">
            <fieldset>
                <legend>New User Signup:</legend>
                <ul>
                    <label class="left">
                        Name:
                    </label>
                    <div class="column">
                        <input type="text" name="name" id="name" size="16">
                    </div>
                </ul> <br><br>
               
                <input type="submit" value="View My Matches">
            </fieldset>

        </form>
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
