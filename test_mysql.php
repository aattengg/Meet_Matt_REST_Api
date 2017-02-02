<?php
    $server_name = "localhost";
    $user_name = "meetdopa_root";
    $password = "hydroflask0";
    $db_name = "meetdopa_Meet_Matt";
    
    // Create connection
    $conn = new mysqli($server_name, $user_name, $password,$db_name);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    echo "Connected successfully";
    
?>