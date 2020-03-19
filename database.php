<!-- 
Yash Bhambhani
CPSC 349 - Midterm I 
Q2 (10 pts)
03/18/2020
 -->
<?php
    $servername = "localhost";
    $database = "databasename";
    $username = "username";
    $password = "password";
    // Create connection
    $connection = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$connection) {
        die("FATAL: Connection to database failed: " . mysqli_connect_error());
    }
    echo "Connected to database successfully!";
    mysqli_close($connection);
?>