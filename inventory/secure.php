<?php

    if (isset($_SESSION['username']) === FALSE ){
       
        echo "PLEASE LOGIN FIRST!";
        echo "<a href='login.php'>Back</a>";
        exit();
    }



?>