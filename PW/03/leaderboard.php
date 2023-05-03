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
        <?php
          $file = 'leaderboard.txt';

// Read the leaderboard data from the file
$leaderboard_data = file($file);

// Sort the data by generation in descending order
usort($leaderboard_data, function($a, $b) {
    return explode(',', $b)[1] - explode(',', $a)[1];
});

// Output the leaderboard table
echo '<table style="border: 2px solid maroon; border-collapse: collapse;">';
echo '<tr><th style="width: 200px;">Rank</th><th style="width: 200px;">Username</th><th style="width: 200px;">Generation</th><th style="width: 200px;">Date Played</th></tr>';
$rank = 1;
foreach ($leaderboard_data as $line) {
    $data = explode(',', $line);
    if(count($data) > 1){
        echo '<tr style="border: 2px solid maroon;"><td style="width: 200px;">' . $rank . '</td><td style="width: 200px;">' . $data[0] . '</td><td style="width: 200px;">' . $data[1] . '</td><td style="width: 200px;">' . $data[2] . '</td></tr>';
        $rank++;
    }
    
}
echo '</table>';
?>
    </div>
<script src="game.js" type="text/javascript"></script>
</body>
</html>
