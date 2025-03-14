<?php
echo "Hello, PHP!";
echo "<br>";


// $sum=[];

// function sumOfDigit($n){
//     $sum = 0;
//     for($i=0; $i<=$n; $i++){
//         $sum += $i;
//     }
//     return $sum;

// }

// echo sumOfDigit(4);
// echo "\n";

// $name=$_GET['name'];
// echo "Hello, $name!";
// echo "<br>";

// $name=$_POST['name'];
// echo "Hello, $name!";

// session_start();

// $_SESSION['name'] = 'altaf';
// echo $_SESSION['name'];
// "<br>";
// echo "<br>";
// echo "<br>";

// setcookie('name', 'ziyaa', time() + (86400 * 30), "/");

// if (!isset($_COOKIE, $_SESSION['name'])) {
//     echo 'cookie is not set';
// } else {
//     echo 'welcome ' . $_SESSION['name'];
//     echo "<br>";
//     echo 'welcome ' . $_COOKIE['name'];
// }



// login system with session ans cookies

if(isset($_POST['usename'])){
    header('Location: login.php');
    exit();
}

?>

<?php
// Agar cookie me username hai toh auto-login
if (isset($_COOKIE['username'])) {
    header("Location: profile.php");
    exit();
}
?>
<form action="login.php" method="POST" style="max-width: 300px; margin: auto; padding: 10px; border: 1px solid #ccc; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
    <div style="margin-bottom: 15px;">
        <label for="username" style="display: block; margin-bottom: 5px;">Username:</label>
        <input type="text" name="username" id="username" required style="width: 100%; padding: 8px; box-sizing: border-box;">
    </div>
    <div style="margin-bottom: 15px;">
        <label for="password" style="display: block; margin-bottom: 5px;">Password:</label>
        <input type="password" name="password" id="password" required style="width: 100%; padding: 8px; box-sizing: border-box;">
    </div>
    <div style="margin-bottom: 15px;">
        <label for="remember" style="display: inline-block; margin-right: 10px;">Remember Me:</label>
        <input type="checkbox" name="remember" id="remember">
    </div>
    <button type="submit" style="width: 100%; padding: 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">Login</button>
</form>









<!-- <form action="index.php" method="Post">
enter your name:<br> <input type="text" name="name"><br><br>
<input type="submit">
</form> -->