<?php
// update_status.php

include '../conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $emergency_status = $_POST['emergency_status'];

    $updateQuery = "UPDATE scerns_status SET emergency_status = ? WHERE id = ?";
    $stmt = $conn->prepare($updateQuery);

    if ($stmt) {
        $stmt->bind_param('ss', $emergency_status, $id);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            // Return the updated status
            echo $emergency_status;
        } else {
            echo "No rows were updated.";
        }

        $stmt->close();
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    echo "Invalid request method.";
}

$conn->close();
?>
