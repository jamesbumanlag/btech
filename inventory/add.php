<?php

    session_start();
    include 'secure.php';

    require 'db_error_handling.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        require 'username_password_validation.php';



        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $conn->prepare
            ("INSERT INTO users (username, password) VALUES (?, ?)");
        
        $stmt->bind_param('ss', $username, $hashedPassword);

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
</head>
<body>

    
    <form  method="post" id="loginForm">

        <img class="login-icon" src="dashboard images/add_user.png" alt="">
        <h1>Add User</h1>

        <div class="input-group">
            <label for="username">Username</label>
           
            <input type="text" id="username" name="username" placeholder="Username">
        </div>
        
        <div class="input-group">
            <label for="password">Password</label>
            
            <input type="password" id="password" name="password" placeholder="Password">
        </div>
     
        
        
        
        <button type="submit" id="submitButton" class="loginBtn">Submit</button>
        <br>
        
        
    </form>
    <script src="script.js"></script>
</body>
</html>