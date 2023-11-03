<?php
include 'db_create_connect.php';

//Connect to db
$status = createDB();
if ($status == 1){
    $conn = OpenDB();
} else {
    echo "Could not connect to or create the database";
}
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql1 = file_get_contents('table_atkinson.sql');
if (mysqli_multi_query($conn, $sql1)){
    echo "Successfully Imported Name Table<br>";
}
else {
    echo "Failed to Import Name Table<br>";
}
CloseDB($conn);


?>