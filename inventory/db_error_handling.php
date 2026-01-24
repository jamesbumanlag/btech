<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try{
    $conn = new mysqli('localhost', 'root', '', 'login_inventory');
} catch (mysqli_sql_exception $e) {
    die("Database failed");
};


?>