<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (authenticate($username, $password)) {
    // Redirect to the dice game page with username as a query parameter
    header('Location: main.php?username=' . urlencode($username));
    exit();
} else {
    // Redirect back to the login page with an error
    header('Location: login.php?error=invalid');
    exit();
}
}

function authenticate($username, $password) {
    $credentialsFile = 'credentials.txt';
    $file = fopen($credentialsFile, 'r');

    while (($line = fgets($file)) !== false) {
        list($storedUsername, $storedPassword) = explode(',', trim($line));

        if ($username === $storedUsername && $password === $storedPassword) {
            fclose($file);
            return true;
        }
    }

    fclose($file);
    return false;
}
?>
