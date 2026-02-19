<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST'){

        // get the user input
        $username = trim($_POST['username']);
        $firstname = trim($_POST['firstname']);
        $lastname = trim($_POST['lastname']);
        $email = trim($_POST['email']);
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];

        // validate user input
        if ($username == '' || $password == ''){
            echo "Username and password cannot be empty";
            echo "<br><a href='add.php'>Back</a>";
            exit();
        };

        if (strlen($username) <= 4 && strlen($username) >= 20 ){
            echo "Username must be 4-20 characters";
            echo "<br><a href='add.php'>Back</a>";
            exit();
        };

        if (!preg_match('/^[a-zA-Z0-9]{4,20}$/', $username)){
            echo 'Invalid username';
            echo "<br><a href='add.php'>Back</a>";
            exit();
        };

        if (strlen($password) <= 4 && strlen($password) >= 20 ){
            echo "Password must be 4-20 characters";
            echo "<br><a href='add.php'>Back</a>";
            exit();
        }

        if ($password !== )



    }
    

?>