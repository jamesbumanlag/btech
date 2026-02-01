<?php

    require 'db_error_handling.php';

    require 'username_password_validation.php';



    $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $stmt->bind_param('ss', $username, $password);
    if ($stmt->execute()){
        echo "new user added";
    } else {
        return;
    }

    
   

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
</head>
<body>

    <h1>Add New User</h1>
    <form method="post" id="addUserForm">
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
        <br>
        <label for="password">Password</label>
        <input type="password" id="password" name="password">
        <br>
        <button type="submit" name="addButton" id="addButton">Add</button>
    </form>
    <script src="script.js"></script>
</body>
</html>