<?php
include '../conn.php';


// Handle the Ajax request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the required parameters are set
    if (isset($_POST['id']) && isset($_POST['movement'])) {
        // Validate and sanitize input
        $id = $_POST['id'];
        $movement = $_POST['movement'];

        // Your SQL update statement (without prepared statements)
        $sql = "UPDATE scerns_status SET movement = '$movement' WHERE id = '$id'";

        // Execute the update statement
        if ($conn->query($sql) === TRUE) {
            // Return a success message or any data you want to send back to the client
            echo json_encode(['success' => true, 'message' => 'Movement updated successfully']);
        } else {
            // Return an error message
            echo json_encode(['success' => false, 'message' => 'Error updating movement: ' . $conn->error]);
        }
    } else {
        // Return an error message if parameters are missing
        echo json_encode(['success' => false, 'message' => 'Missing parameters']);
    }
}

// Close connection
$conn->close();
?>
