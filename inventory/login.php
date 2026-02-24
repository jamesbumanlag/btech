<?php
session_start();
require 'db_error_handling.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($username === '' || $password === '') {
        $error = "Username and password are required.";
    } else {

        $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();

        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        if (!$user || !password_verify($password, $user['password'])) {
            $error = "Invalid username or password.";
        } else {
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['username'] = $user['username'];

            header("Location: index.php");
            exit;
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
    <link rel="shortcut icon" href="dashboard images/favicon.ico" type="image/x-icon">
</head>
<body>

    <?php if ($error): ?>
        <div class="error-box" id="error-box">
            <p><?=htmlspecialchars($error); ?></p>
            <button type="button" class="close-btn" onclick="closeError()">x</button>
        </div>
        
    <?php endif; ?>

  


    <!-- <div class="error" id="error">
        <p>Invalid username and password</p>
    </div> -->

    <form  method="post" id="loginForm">

        <img class="login-icon" src="dashboard images/login_icon.png" alt="">
        <h1>Material Inventory Dashboard</h1>

        <div class="input-group">
            <span class="icon"><img src="dashboard images/user.png" alt=""></span>
            <input type="text" id="username" name="username" placeholder="Username" autocomplete="off">
        </div>
        
        <div class="input-group">
            <span class="icon"><img src="dashboard images/password_icon.png" alt=""></span>
            <input type="password" id="password" name="password" autocomplete="new-password" placeholder="Password">
        </div>
     
        
        
        <a href="forgot.php" class="resetPassword">Forgot password?</a>
        <button type="submit" id="submitButton" class="loginBtn">Log In</button>
        <br>
        <p class="signUp">Don't have an account?<span><a href="add.php" style="text-align: center;">Sign Up</a></span></p>

        
    </form>
    
<script src="script.js"></script>
</body>
</html>