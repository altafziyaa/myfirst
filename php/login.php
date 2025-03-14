<?php
// Hardcoded credentials for demo
$valid_username = "altaf";
$valid_password = "1234";

// Start session
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get username and password from POST
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if username and password match
    if ($username == $valid_username && $password == $valid_password) {
        // Login successful
        $_SESSION['username'] = $username; // Store in session

        // Remember Me functionality
        if (isset($_POST['remember'])) {
            // Set cookie for 30 days
            setcookie("username", $username, time() + (86400 * 30), "/");
        }

        header("Location: welcome.php"); // Redirect to profile page
        exit();
    } else {
        echo "Invalid username or password!";
    }
}
?>
