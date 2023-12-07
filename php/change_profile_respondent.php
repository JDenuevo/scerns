<?php
include '../conn.php';
session_start();

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve new data from the form
    $id = $_POST['id'];
    $name = $_POST['name'];
    $contact_number = $_POST['contact_number'];

    // Fetch existing data from the database
    $selectSql = "SELECT name, contact_number FROM scerns_respondents WHERE id = ?";
    $stmtSelect = mysqli_prepare($conn, $selectSql);
    mysqli_stmt_bind_param($stmtSelect, "s", $id);
    mysqli_stmt_execute($stmtSelect);
    $resultSelect = mysqli_stmt_get_result($stmtSelect);
    $rowSelect = mysqli_fetch_assoc($resultSelect);

    // Assign fetched values to variables
    $nameFromDatabase = $rowSelect['name'];
    $contactNumberFromDatabase = $rowSelect['contact_number'];

    // Check if there are changes
    $updateSql = "UPDATE scerns_respondents SET";
    $params = array();

    if (isset($_FILES["prof_img"]) && $_FILES["prof_img"]["error"] == 0) {
        // Check if the file is an image
        $imageInfo = getimagesize($_FILES["prof_img"]["tmp_name"]);
        if ($imageInfo !== false) {
            // Process the uploaded file
            $imageData = file_get_contents($_FILES["prof_img"]["tmp_name"]);

            // Include the image BLOB in the update SQL statement
            $updateSql .= " prof_img = ?";
            $params[] = $imageData;
        } else {
            // Handle the case where the uploaded file is not an image
            echo "Invalid file format. Please upload an image.";
            exit();
        }
    }

    if ($name != $nameFromDatabase) {
        $updateSql .= empty($params) ? "" : ",";
        $updateSql .= " name = ?";
        $params[] = $name;

        // Update session variable for fullname
        $_SESSION['name'] = $name;
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

        // Check for errors
        if (mysqli_stmt_errno($stmt)) {
            // Handle the error
            echo "Error updating profile: " . mysqli_stmt_error($stmt);
        } else {
            // Success message or redirection
            header('Location: ../respondent/account.php');
            exit();
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        // No changes, refresh the page or show a message
        header('Location: ../respondent/account.php');
        exit();
    }
}
?>
