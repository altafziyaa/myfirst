<?php
session_start(); // Start session

// Check if session or cookie is set
if (!isset($_SESSION['username']) && !isset($_COOKIE['username'])) {
    header("Location: login.php"); // Redirect to login if not logged in
    exit();
}

// Get username from session or cookie
$username = isset($_SESSION['username']) ? $_SESSION['username'] : $_COOKIE['username'];

// Simulate user profile data (normally from a database)
$profile_data = [
    "name" => "altaf",
    "email" => "altaf@example.com",
    "address" => "123 Street, City"
];

// Check if profile data exists in cookies and auto-fill
if (isset($_COOKIE['profile_data'])) {
    $profile_data = unserialize($_COOKIE['profile_data']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        h2, h3 {
            margin: 0 0 10px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 5px;
        }
        input {
            margin-bottom: 10px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color: #007BFF;
            color: #fff;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Welcome, <?php echo $username; ?>!</h2>
        <h3>Your Profile</h3>

        <form action="logout.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="<?php echo $profile_data['name']; ?>" required>
            <br>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="<?php echo $profile_data['email']; ?>" required>
            <br>
            <label for="address">Address:</label>
            <input type="text" name="address" id="address" value="<?php echo $profile_data['address']; ?>" required>
            <br>
            <button type="submit">Save Profile</button>
        </form>
    </div>
</body>
</html>
