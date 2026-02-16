<?php

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
</head>
<body>

    <h1>Add New User</h1>
    <form method="post" id="addUserForm" autocomplete="off">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" autocomplete="new-username" >
        <br>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" autocomplete="new-password">
        <br>
        <button type="submit" name="addButton" id="addButton">Add</button>
        <button type="button" onclick="window.location.href='login.php'"> Login </button>

    </form>
    <script src="script.js"></script>
</body>
</html>