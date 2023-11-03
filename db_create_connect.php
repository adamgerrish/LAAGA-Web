<?php
$servername = "localhost";
$username = "root";
$password = "Sabres77";
$db = "laaga";

function createDB(){
    // Create connection
    global $servername,$username,$password;
    $conn = new mysqli($servername, $username, $password);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Create database
    $sql = "CREATE DATABASE IF NOT EXISTS laaga";
    if ($conn->query($sql) === FALSE) {
        echo "Error creating database: " . $conn->error;
    }
    return 1;
}

function OpenDB(){
    global $servername, $username, $password, $db;

    //Connect to DB Now
    $conn = new mysqli($servername, $username, $password, $db) or die("Connect failed: %s\n". $conn->error);
    return $conn; //Ready for SQL statements
}

function CloseDB($conn){
    $conn->close();
}

?>