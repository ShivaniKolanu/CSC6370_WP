<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="gol.css" />
<link rel="stylesheet" href="login.css" type="text/css">

<script type="module" src="game.js"></script>
<title>Convoy's Game of Life</title>
</head>
<body>
    <h1 style=" background-color: #0CC0DF;color: white; width: 75%; text-align: center;">Game of Life</h1>
    <h4 style=" background-color: #0CC0DF; width: 75%; text-align: center; float: right; height: 15px; padding: 15px 0;">By Anuska, Sagar and Shivani</h4><br><br>
    <br><br><br><br><br>
    <div class="content">
        <div id="signup">
        <?php
            if (isset($_GET['error']) && $_GET['error'] == 'user_exists') {
                echo "<p style='color: red;'>Username already exists. Please choose another one.</p>";
            }
        ?>
        <form action="create_user.php" method="POST">
            <div>
                <label for="email"></label>
                <input type="text" placeholder="Enter Email/ Phone Number" name="username" required>
            </div>
            <div>
                <label for="psw"></label>
                <input type="password" placeholder="Enter Password" name="password" required>
            </div>
            <div>
                <label for="psw1"></label>
                <input type="password" style="border: 3px solid #b07cf1" placeholder="Confirm Password" name="password" required>
            </div>
                <button type="submit" class="login">Sign Up!</button>
            </form>
            <p>Already have an account? <a href="login.php">Login.</a></p>
        </div>
    </div>