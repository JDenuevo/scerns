<?php
include '../conn.php';
session_start();

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve new username and password from the form
    $newUsername = $_POST['username'];
    $newPassword = $_POST['password'];
    $email = $_POST['email'];

    // Check if there are changes
    if ($newUsername != $username || !empty($newPassword)) {
        // Update the database with the new values
        $updateSql = "UPDATE scerns_login SET username = '$newUsername' WHERE email = '$email'";
        mysqli_query($conn, $updateSql);

        // You should also handle password update securely
        if (!empty($newPassword)) {
            // Use MD5 for password hashing (not recommended for security reasons)
            $hashedPassword = md5($newPassword);
            $updatePasswordSql = "UPDATE scerns_login SET password = '$hashedPassword' WHERE email = '$email'";
            mysqli_query($conn, $updatePasswordSql);
        }

        // Optionally, you can redirect the user or show a success message
        header('Location: ../user/account.php');
        exit();
    } else {
        // No changes, refresh the page or show a message
        header('Location: ../user/account.php');
        exit();
    }
}
?>
