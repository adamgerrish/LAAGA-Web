<?php
require 'db_create_connect.php';

function importTable ($tableName,$tableFile){

    // Connect to the database
    $status = createDB();
    if ($status == 1) {
        $conn = OpenDB();
    } else {
        echo "Could not connect to or create the database";
        exit; // Stop execution if the connection failed
    }


    // Check if the table 'AtkinsonRounds' exists
    $result = $conn->query("SHOW TABLES LIKE '$tableName'");
    if ($result->num_rows == 0) {
        // Table doesn't exist, import the SQL file to create it
        $sqlInsertData = file_get_contents($tableFile);
        if (mysqli_multi_query($conn, $sqlInsertData)) {
            echo "Successfully imported $tableName <br>";
        } else {
            echo "Failed to import $tableName <br>";
            exit; // Stop execution if the import failed
        }
    }

    //Close database
    CloseDB($conn);
}
?>