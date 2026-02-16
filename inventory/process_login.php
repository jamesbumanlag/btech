<?php

session_start();

include 'db_error_handling.php';

$error = '';

$username = trim($_POST['username'] ?? '');
$password = ($_POST['password'] ?? '');


if ($username === '' || $password === ''){

    $error = "Invalid username and password 1";

    // echo "Invalid username and password 1";
    // echo "<br><a href='login.php'>Back to login</a>";
}

$stmt = $conn->prepare("SELECT * FROM users WHERE username=?");
$stmt->bind_param('s', $username);

// verify that the password entered matches the user associated with the username
$stmt->execute();

$result = $stmt->get_result();



$user = $result->fetch_assoc();

if (!$user || !password_verify($password, $user['password'])){
    $error = "Invalid username and password 2";
    // echo "Incorrect username or password 2";
    // echo "<br><a href='login.php'>Back to login</a>";
    exit;
}

    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;


    header("Location: index.php");
    echo "<br><a href='login.php'>Logout</a>";



?>
