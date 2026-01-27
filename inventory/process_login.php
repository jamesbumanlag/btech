<?php

include 'db_error_handling.php';

$username = strtolower($_POST['username']);
$password = strtolower($_POST['password']);

$result = $conn->query("SELECT * FROM users WHERE username = '$username'");

if ($result->num_rows == 0){
    echo "Incorrect username and password";
    exit();
} 

// verify that the password entered matches the user associated with the username

$data = $result->fetch_all(MYSQLI_ASSOC);

// echo "<pre>";
// var_dump($data);
// echo "</pre>";


$passwordInDatabase = $data[0]['password'];

if ($passwordInDatabase !== $password) {
    echo "Incorrect username and password";
    exit();
}



// assume that the username and password are correct


// if ($username == 'admin' && $password == 'password'){
//     header("Location: index.php");
//     exit();
// } else {
//     echo "Invalid credentials";
    
// }


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
