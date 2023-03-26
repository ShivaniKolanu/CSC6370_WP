<!-- 
=======================================================================
***********************************************************************
Author : Shivani Kolanu
Assignment : Homework Assignment 3
Course : Web Programming
Assignment Description : Recreating a dating app called nerdLuv provided by the instructor.
Filename : signup.php
Did below extra features :
Extra Feature #1. Robust page with form validation
Extra feature #2. User photos
************************************************************************
======================================================================== -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>NerdieLuv</title>
        <link rel="stylesheet" href="nerdieluv.css">
    </head>
    <body>
        <img src="img/logo.png" alt="logo">
        <!-- Signup form starts -->

        <form method="POST" action="signup-submit.php" enctype="multipart/form-data">
            <fieldset>
                <legend>New User Signup:</legend>
                <ul>
                    <label class="left">
                        Name:
                    </label>
                    <div class="column">
                        <input type="text" name="name" id="name" size="16">
                    </div>
                </ul> <br>
                <ul>
                    <label class="left">
                        Gender:
                    </label>
                    <div class="column">
                    <input type="radio" id="Male" name="gender" value="M">
                    <label for="Male">Male</label>
                    <input type="radio" id="Female" name="gender" value="F" checked>
                    <label for="Female">Female</label><br>
                    </div>
                </ul> <br>
                <ul>
                    <label class="left">
                        Age:
                    </label>
                    <div class="column">
                        <input type="text" name="age" id="age" size="6" maxlength="2">
                    </div>
                </ul> <br>
                <ul>
                    <label class="left">
                        Personality type:
                    </label>

                    <input type="text" name="per_type" id="per_type" size="6" maxlength="4">                    

                    (<a href="http://www.humanmetrics.com/cgi-win/JTypes2.asp">Don't know your type?</a>)
                </ul>
                <ul>
                    <label class="left">
                        Favorite OS:
                    </label>
                    <div class="column">
                    <select name="os" id="os">
                        <option value="Windows">Windows</option>
                        <option value="Mac">Mac OS X</option>
                        <option value="Linux">Linux</option>
                    </select>
                    </div>
                </ul> <br>
                <ul>
                    <label class="left">
                        Seeking age:
                    </label>

                    <input type="text" name="min" id="min" size="6" maxlength="2" placeholder="min"> to                   

                    <input type="text" name="max" id="max" size="6" maxlength="2" placeholder="max">

                </ul>

                <ul>
                    <label class="left">
                        Photo:
                    </label>

                    <input type="file" name="photo" id="photo" accept=".jpeg" required>                   
                </ul> <br>
                <input type="submit" value="Sign Up">
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