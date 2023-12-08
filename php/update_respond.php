<?php
// update_status.php

include '../conn.php';
// Decode JSON data received from the AJAX request
$data = json_decode(file_get_contents("php://input"), true);

$id = $data['id'];
$respondent_name = $data['respondent_name'];
$movement = $data['movement'];

// Perform insertion
$sql = "INSERT INTO scerns_status (id, respondent_name, movement) VALUES ('$id', '$respondent_name', '$movement')";

if ($conn->query($sql) === TRUE) {
    echo json_encode(["status" => "success"]);
} else {
    echo json_encode(["status" => "error", "message" => $conn->error]);
}

$conn->close();
?>