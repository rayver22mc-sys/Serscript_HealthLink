<?php
//Server Variables 
    $db_Server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "testlogininformationdb";
    $conn = "";

    try{
        $conn = mysqli_connect($db_Server, $db_user, $db_pass, $db_name);
    }
    catch(mysqli_sql_exception){echo "db connection not established";}
?>