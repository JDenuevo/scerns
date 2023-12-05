<?php
include '../conn.php';
session_start();

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve new data from the form
    $id = $_POST['id'];
    $newUsername = $_POST['username'];
    $newPassword = $_POST['password'];
    $email = $_POST['email'];
    $fullname = $_POST['fullname'];
    $contact_number = $_POST['contact_number'];

    // Check if there are changes
    $updateSql = "UPDATE scerns_login SET";
    $params = array();

    if ($newUsername != $username) {
        $updateSql .= " username = ?";
        $params[] = $newUsername;
    }

    if (!empty($newPassword)) {
        // Use MD5 for password hashing (not recommended for security reasons)
        $hashedPassword = md5($newPassword);
        $updateSql .= empty($params) ? "" : ",";
        $updateSql .= " password = ?";
        $params[] = $hashedPassword;
    }

    if ($email != $emailFromDatabase) {
        $updateSql .= empty($params) ? "" : ",";
        $updateSql .= " email = ?";
        $params[] = $email;

        // Update session variable for email
        $_SESSION['email'] = $email;
    }

    if ($fullname != $fullnameFromDatabase) {
        $updateSql .= empty($params) ? "" : ",";
        $updateSql .= " fullname = ?";
        $params[] = $fullname;

        // Update session variable for fullname
        $_SESSION['fullname'] = $fullname;
    }

    if ($contact_number != $contactNumberFromDatabase) {
        $updateSql .= empty($params) ? "" : ",";
        $updateSql .= " contact_number = ?";
        $params[] = $contact_number;

        // Update session variable for contact_number
        $_SESSION['contact_number'] = $contact_number;
    }

    if (!empty($params)) {
        // At least one field has changed, update the database
        $updateSql .= " WHERE id = ?";
        $params[] = $id;

        // Prepare and execute the statement
        $stmt = mysqli_prepare($conn, $updateSql);
        $types = str_repeat("s", count($params));
        mysqli_stmt_bind_param($stmt, $types, ...$params);
        mysqli_stmt_execute($stmt);

        // Close the statement
        mysqli_stmt_close($stmt);

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
