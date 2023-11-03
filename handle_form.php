<?php
require 'db_create_connect.php';

// Connect to the database
$status = createDB();
if ($status == 1) {
    $conn = OpenDB();
} else {
    echo "Could not connect to or create the database";
    exit; // Stop execution if the connection failed
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $playerID = $_POST["player_id"];
    $course = $_POST["course"];
    $par = $_POST["par"];
    $rating = $_POST["rating"];
    $slope = $_POST["slope"];
    $score = $_POST["score"];
    $handicap = $_POST["handicap"];
    
    // Insert the data into the GolfRounds table
    $sql = "INSERT INTO GolfRounds (PlayerID, Course, Par, Rating, Slope, Score, Handicap) 
            VALUES ($playerID, '$course', $par, $rating, $slope, $score, $handicap)";
    
    // Execute the query
    if (mysqli_query($conn, $sql)) {
        echo "Round added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

CloseDB($conn);
?>