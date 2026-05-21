<?php
// Server Variables 
$db_Server = "localhost";
$db_user = "root";
$db_pass = "";
// $db_name = "users";   
$db_name = "doubledisasterdb1.0";   

$conn = null;  // initialize

try {
    $conn = mysqli_connect($db_Server, $db_user, $db_pass, $db_name);
    
    if (!$conn) {
        throw new Exception("Connection failed: " . mysqli_connect_error());
    }
    
    mysqli_set_charset($conn, "utf8mb4");
} 
catch (Exception $e) {
    die("Database connection error: " . $e->getMessage());
}
?>