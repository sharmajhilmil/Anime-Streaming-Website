<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
include 'dbconnect.php';
$username = $_POST["username"];
$password = $_POST["password"];
$date = $_POST["date"];
$sql = "INSERT INTO `users` (`username`, `password`, `date`) VALUES ('$username', '$password', '$date')";
$result = mysqli_query($conn, $sql);
header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Register</h2>
        <form action="register.php" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="date">Date of Joining:</label>
                <input type="date" name="date" required>
            </div>
            <button type="submit" onclick="location='login.php'">Register</button>
        </form>
        <p>Already have an account? <a href="login.php">Login here</a></p>
    </div>
</body>
</html>
