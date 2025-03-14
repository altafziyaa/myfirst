<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Save profile data from form
    $profile_data = [
        "name" => $_POST['name'],
        "email" => $_POST['email'],
        "address" => $_POST['address']
    ];

    // Save profile data in session
    session_start();
    $_SESSION['profile_data'] = $profile_data;

    // Save profile data in cookie for 30 days (serialize to store array)
    setcookie("profile_data", serialize($profile_data), time() + (86400 * 30), "/");

    echo "Profile saved successfully!";
}
?>
