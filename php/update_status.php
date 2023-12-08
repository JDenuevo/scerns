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
            // Status updated in scerns_status
            echo $emergency_status;

            // Check if additional update is needed
            if ($emergency_status === 'Unsuccessfully Operated' || $emergency_status === 'Successfully Operated') {
                $updateQuery1 = "UPDATE scerns_reports SET status = 'Done' WHERE id = ?";
                $stmt1 = $conn->prepare($updateQuery1);

                if ($stmt1) {
                    $stmt1->bind_param('s', $id);
                    $stmt1->execute();

                    if ($stmt1->affected_rows > 0) {
                        // Additional update done
                        echo "Done";
                    } else {
                        echo "No rows were updated in scerns_reports.";
                    }

                    $stmt1->close();
                } else {
                    echo "Error in scerns_reports update: " . $conn->error;
                }
            }
        } else {
            echo "No rows were updated in scerns_status.";
        }

        $stmt->close();
    } else {
        echo "Error in scerns_status update: " . $conn->error;
    }
} else {
    echo "Invalid request method.";
}

$conn->close();
?>
