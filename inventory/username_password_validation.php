<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST'){

        // get the user input
        $username = trim($_POST['username'] ?? '');
        $firstname = trim($_POST['firstname'] ?? '');
        $lastname = trim($_POST['lastname'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $password = trim($_POST['password']) ?? '';
        $confirmPassword = trim($_POST['confirmPassword']) ?? '';

        // validate user input
        // if ($username == '' || $password == ''){
        //     echo "Username and password cannot be empty";
        //     echo "<br><a href='add.php'>Back</a>";
        //     exit();
        // };


        $errors = [];

        if (empty($firstname)){
            $errors[] = "Firstname is required";
        }

        if (empty($lastname)){
            $errors[] = "Lastname is required";
        }

        if (empty($email)){
            $errors[] = "Email is required";
        } 
        elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors[] = "Invalid email format";
        }

        
        if (strlen($username) < 4 || strlen($username) > 20 ){
            $errors[]= "Username must be 4-20 characters";
           
        };

        if (!preg_match('/^[a-zA-Z0-9]{4,20}$/', $username)){
            $errors[]= 'Invalid username';
            
        }

        if (strlen($password) < 4 || strlen($password) > 20 ){
            $errors[]= "Password must be 4-20 characters";
           
        }
        
        if (!empty($errors)){
            foreach ($errors as $error) {
                echo $error . "<br>";
            }
            echo "<a href='add.php'>Back</a>";
            exit();
        }
        
    }
    

?>