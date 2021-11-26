<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "jawa4u";
    
    $conn = mysqli_connect($host, $user, $pass, $db);
    
    mysqli_select_db($conn, $db);
?>