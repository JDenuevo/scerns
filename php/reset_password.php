<?php
session_start();
include '../conn.php';
// Get the submitted OTP value
$password = $_POST['password'];
$email = $_POST['email'];

// OTPs match, proceed to newpass.php
$hash_password = md5($password);

$sql = "UPDATE scerns_login SET password = '$hash_password' WHERE email = '$email'";
$result = mysqli_query($conn, $sql);
header('Location: ../index.php');



// if (!empty($errors)) {
//     // Redirect back to the login page with the error messages
//     $errorString = implode(',', $errors);
//     header('Location: ../newpass.php?errors=' . urlencode($errorString));
//     exit();
// }
?>