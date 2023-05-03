

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (user_exists($username)) {
        // Redirect back to the registration page with an error
        header('Location: signup.php?error=user_exists');
        exit();
    } else {
        create_user($username, $password);
        // Redirect to the dice game page
        header('Location: login.php');
        exit();
    }
}

function user_exists($username) {
    $credentialsFile = 'credentials.txt';
    $file = fopen($credentialsFile, 'r');

    while (($line = fgets($file)) !== false) {
        list($storedUsername, $storedPassword) = explode(',', trim($line));

        if ($username === $storedUsername) {
            fclose($file);
            return true;
        }
    }

    fclose($file);
    return false;
}

function create_user($username, $password) {
    $credentialsFile = 'credentials.txt';
    $file = fopen($credentialsFile, 'a');
    fwrite($file, $username . ',' . $password . PHP_EOL);
    fclose($file);
}
?>
