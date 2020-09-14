<?php 
    /// make a connection databse
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "db_psb";

    $conn = mysqli_connect($host,$user,$pass,$db);

    if(!$conn){
        echo 'error :'.mysqli_connect_error($conn);
    }
?>