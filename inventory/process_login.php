<?php

include 'db_error_handling.php';

$username = strtolower($_POST['username']);
$password = strtolower($_POST['password']);

if ($username == 'admin' && $password == 'password'){
    header("Location: index.php");
    exit();
} else {
    echo "Invalid credentials";
    
}


// username:
// var_dump($username);
// echo'<br>';
// password:
// var_dump($password);


// $conn = new mysqli('localhost', 'roots', '', 'login_inventory');

// echo "<pre>";
// var_dump($conn);
// echo "</pre>";

// echo "<pre>";
// var_dump($conn->connect_error);
// echo "</pre>";

// echo "<pre>";
// var_dump($conn->connect_errno);
// echo "</pre>";



// if ($conn->connect_errno !== 0) {
//     die("Database connection failed ({$conn->connect_errno}): {$conn->connect_error}");
// }

// echo "Database connected successfully";


?>
