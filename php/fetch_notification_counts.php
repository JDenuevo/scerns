<?php
include '../conn.php';
session_start();

$response = [];

$sqlUnreadCount = "SELECT COUNT(*) as unread FROM scerns_reports WHERE status = 'Pending'";

$resultUnreadCount = $conn->query($sqlUnreadCount);

if ($resultUnreadCount === false) {
    $response['error'] = 'Error executing the query: ' . $conn->error;
} else {
    $unreadCount = $resultUnreadCount->fetch_assoc()['unread'];
    $response['unread'] = $unreadCount;
}

// Set the appropriate content type for JSON
header('Content-Type: application/json');

// Output the JSON response
echo json_encode($response);

$conn->close();
?>