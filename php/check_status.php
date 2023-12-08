<?php
// update_status.php

include '../conn.php';

// Get the unique_id from the GET parameters
$unique_id = $_GET['unique_id'];

// Prepare and execute the SQL query
$sql = "SELECT * FROM scerns_status WHERE id = '$unique_id'";
$result = $conn->query($sql);

// Check if the unique_id was found
if ($result->num_rows > 0) {
    echo "found";
} else {
    echo "not found";
}

// Close the database connection
$conn->close();
?>
