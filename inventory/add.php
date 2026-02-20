<?php

    session_start();
   

    require 'db_error_handling.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        require 'username_password_validation.php';



        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $conn->prepare
            ("INSERT INTO users (username, firstname, lastname, email, password) VALUES (?, ?, ?, ?, ?)");
        
        $stmt->bind_param('sssss', $username, $firstname, $lastname, $email, $hashedPassword);

        try {
            $stmt->execute();
            header("Location: add.php?success=1");
            echo "Added succesfully";
        } catch (mysqli_sql_exception $e) {
            if ($e->getCode()  == 1062 ){
                echo "Username already exists";
                echo "<br><a href='add.php'>Back</a>";
                exit;
            }else {
                echo "Database Error";
                echo "<a href='add.php'>Back</a>";
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
    <title>Add User</title>
    <link rel="stylesheet" href="add.css">
    <link rel="shortcut icon" href="dashboard images/favicon.ico" type="image/x-icon">
</head>
<body>

    
    <form  method="post" id="loginForm">

        <img class="login-icon" src="dashboard images/add_user.png" alt="">
        <h1>Add User</h1>

        <div class="input-group">
            <!-- <label for="username">Username</label> -->
            <input type="text" id="username" name="username" placeholder="Username" required>
        </div>

         <div class="input-group">
            <!-- <label for="firstname">Firstname</label> -->
            <input type="text" id="firstname" name="firstname" placeholder="Firstname" required>
        </div>

         <div class="input-group">
            <!-- <label for="lastname">Lastname</label> -->
            <input type="text" id="lastname" name="lastname" placeholder="Lastname" required>
        </div>

         <div class="input-group">
            <!-- <label for="email">Email</label> -->
            <input type="text" id="email" name="email" placeholder="Email" required>
        </div>
        
        <div class="input-group">
            <!-- <label for="password">Password</label> -->
            <input type="password" id="password" name="password" placeholder="Password" required>
        </div>

        <div class="input-group">
            <!-- <label for="confirm-password">Confirm-Password</label> -->
            <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm-password" required>
        </div>
     
     
        
        <div class="button-group">
            <button type="button" id="cancelButton" class="cancelBtn loginBtn" onclick="window.location.href='login.php'">Cancel</button>
            <button type="submit" id="submitButton" class="loginBtn">Sign Up</button>
        </div>
        
        
        
        
    </form>
    <script src="script.js"></script>
</body>
</html>