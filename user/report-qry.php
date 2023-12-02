<?php
// Start the session
session_start();

include "../conn.php";
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $address = $_POST["address"];
    $landmark = $_POST["landmark"];
    $levels = $_POST["levels"];

    // Insert data into the database
    $sql = "INSERT INTO scerns_reports (address, landmark, levels) VALUES ('$address', '$landmark', '$levels')";

    if ($conn->query($sql) === TRUE) {
        // Store data in session
        $_SESSION["address"] = $address;
        $_SESSION["landmark"] = $landmark;
        $_SESSION["crimeLevel"] = $crimeLevel;

        // Redirect to a different location
        header("Location: location.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
