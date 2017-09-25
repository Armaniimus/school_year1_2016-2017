<?php
function Connect() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $DB = "rood_fo_hijstabel";

    // Create connection
    $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    echo "Connected successfully";
                    }
?>
