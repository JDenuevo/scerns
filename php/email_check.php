<?php
include '../conn.php';
session_start();
// Include PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../phpmailer/src/PHPMailer.php';
require '../phpmailer/src/SMTP.php';
require '../phpmailer/src/Exception.php';

$email = trim($_POST['email']);

$query = "SELECT * FROM scerns_login WHERE email = '$email'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    // Generate a random OTP
    $otp = mt_rand(100000, 999999);
    //the subject
    $sub = "This is your OTP for your password reset";
    //the message
    $msg = $otp;
    //recipient email here
    $rec = $email;
    //send email
    mail($rec,$sub,$msg);
    
    // You should store the OTP in the database or session for validation on the OTP page.
    $_SESSION['otp'] = $otp;
    $_SESSION['email'] = $email;
    header('Location: ../otp.php');
    exit();
} else {
    // Email does not exist, display SweetAlert or handle errors as needed
    $errors[] = "No email found in our database!";
}

// Check for errors
if (!empty($errors)) {
    // Redirect back to the login page with the error messages
    $errorString = implode(',', $errors);
    header('Location: ../forgotpass.php?errors=' . urlencode($errorString));
    exit();
}

?>

