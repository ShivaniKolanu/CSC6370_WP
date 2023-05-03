<?php
    session_start();

    if(isset($_GET['generation'])){
        $generation = $_GET['generation'];
        $username = $_GET['username'];
        date_default_timezone_set('EST');
        $today = date("m-d-y H:i:s"); 
        $old_data = file_get_contents("leaderboard.txt");
        $new_data = "\n".$username . ',' . $generation.','.$today;
        $final_data = $old_data.$new_data;
        file_put_contents("leaderboard.txt", $final_data);

    }

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="gol.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    

<title>Convoy's Game of Life</title>
</head>
<body onload="initializeGrid()">
    <h1 style=" background-color: #0CC0DF;color: white; width: 75%; text-align: center;">Game of Life</h1>
    <h4 style=" background-color: #0CC0DF; width: 75%; text-align: center; float: right; height: 15px; padding: 15px 0;">By Anuska, Sagar and Shivani</h4><br><br>
    <br><br><br><br><br>
    <!-- Leader button -->
<a href="leaderboard.php" style="margin-left: 39%; "><button id="leaderBtn" style="height: 30px;background-color: #F8E175; width:150px;"><b>Leaderboard<b></button></a>

<!-- Logout button -->
<a href="logout.php" ><button id="logoutBtn" style=" height: 30px; width:150px; background-color:#FF6427"><b>Logout<b></button></a>
<br><br><br>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['name']; 
    $cookie_name = "user";
    setcookie($cookie_name, $name);
    
    if (empty($name) && isset($_COOKIE["user"])) {
        $val = $_COOKIE["user"];
    } else {    
        $val = $name;   
    }
}
else{
    $val = $_COOKIE["user"];
}
?>
    <div class="content">
        <div class="display_area" id="count_area" style="text-align: center;">
        </br>
            <label class="_label" for="tableselect">Choose Grid Size:</label>
            <select id="tableselect" name="tableselect" style="background-color: #FFBD59; width: 80px" tabindex="1" onChange="changTable(this)">
                <option value="10"  selected >10</option>
                <option value="20">20</option>
                <option value="30" >30</option>
                <option value="40">40</option>
                <option value="50">50</option>
                <option value="60">60</option>
                <option value="80">80</option>
                <option value="100">100</option>
            </select>
        </div>
        
    <div class="main_grid" id="main_grid">
    </div>

    <div id="g_and_c" >
        <h3 id="generation_h"></h3>
            <h3 id="count_h"></h3>

    </div>
<div id="container" style="position: relative;">
    <button class="action_button" onclick="start()" tabindex="6" style="margin-left: 35%;  position: absolute; bottom: 80px; height: 40px;background-color: #FBBC05; width: 100px; border: 2px solid black; border-radius: 40%;" ><b>Start</b></button>
        <button class="action_button" onclick="stop()" tabindex="7" style="margin-left: 59%; position: absolute; bottom: 80px; height: 40px;background-color: #FBBC05; width: 100px; border: 2px solid black; border-radius: 40%;"><b>Stop</b></button><br><br>
        <button class="action_button" style="width: 24%;height: 150px;border: 2px solid black; position: absolute; bottom: 0px; background-color: #F8E175;" onclick="step(1)" tabindex="2"><b>Increment 1 Generation</b></button>
         <button class="action_button" style="width: 25%;border: 2px solid black;height: 50px;margin-left: 24%;position: absolute; bottom: 0px; background-color: #C7CB35;" onclick="randomPopulation()" tabindex="5"><b>Random Population</b></button>
          <button id="reset_button" class="action_button" style="width: 25%;border: 2px solid black; height: 50px;margin-left: 49%;position: absolute; bottom: 0px; background-color: #B07CF1" tabindex="4"><b>Reset</b></button>
        <button class="action_button" style="width: 25%; border: 2px solid black; height: 150px;margin-left: 74%;position: absolute; bottom: 0px; background-color:#FF6427" onclick="step(23)"  tabindex="3"><b>Increment 23 Generations</b></button>
        
       </div>
    </div>
<script src="game.js" type="text/javascript"></script>
</body>
</html>