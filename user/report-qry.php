<?php
ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
// Start the session
session_start();

include "../conn.php";
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $requester_type = $_POST["requester_type"];
    $email = $_POST["email"];
    $fullname = $_POST["fullname"];
    $mobile = $_POST["mobile"];
    $address = $_POST["address"];
    $landmark = $_POST["landmark"];
    $levels = $_POST["levels"];

    // Generate a unique ID
    $unique_id = generateUniqueID($conn, $requester_type);

    // Insert data into the database
    $sql = "INSERT INTO scerns_reports (id, fullname, email, mobile, address, landmark, levels) VALUES ('$unique_id', '$fullname', '$email', '$mobile', '$address', '$landmark', '$levels')";

    if ($conn->query($sql) === TRUE) {
        // Store data in session
        $_SESSION["unique_id"] = $unique_id;
        $_SESSION["fullname"] = $fullname;
        $_SESSION["requester_type"] = $requester_type;
        $_SESSION["email"] = $email;
        $_SESSION["mobile"] = $mobile; 
        $_SESSION["address"] = $address;
        $_SESSION["landmark"] = $landmark;
        $_SESSION["levels"] = $levels;

        // Redirect to a different location
        header("Location: location.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();

function generateUniqueID($conn, $requestor_type) {
    // Get the current date
    $current_date = date("Ymd");

    // Get the last 4 digits of the latest ID in the database for the current date and requestor_type
    $latest_id_query = "SELECT MAX(SUBSTRING(id, 12, 4)) AS last_id FROM scerns_reports WHERE SUBSTRING(id, 2, 8) = '$current_date'";

    $result = $conn->query($latest_id_query);

    if (!$result) {
        // Handle the query error
        die("Error in query: " . $conn->error);
    }

    $row = $result->fetch_assoc();

    // Increment the last 4 digits or reset if it's a new day
    if (!$row || $current_date > substr($row['last_id'], 1, 8)) {
        $last_id = 0;
    } else {
        $last_id = $row['last_id'];
    }

    // Increment the last 4 digits until a unique ID is found
    do {
        $new_id_suffix = str_pad(($last_id + 1), 4, '0', STR_PAD_LEFT);
        $unique_id = $requestor_type . $current_date . $new_id_suffix;

        // Check if the generated ID already exists in the database
        $check_query = "SELECT id FROM scerns_reports WHERE id = '$unique_id'";
        $check_result = $conn->query($check_query);

        if (!$check_result) {
            die("Error in query: " . $conn->error);
        }

        $row_count = $check_result->num_rows;

        // If the ID is not unique, increment and try again
        $last_id++;
    } while ($row_count > 0);

    return $unique_id;
}






?>
