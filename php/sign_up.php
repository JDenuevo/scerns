<?php
include '../conn.php';
session_start();

if (isset($_POST['signup'])) {
  $fullname = $_POST['fullname'];
  $contact_number = $_POST['contact_number'];
  $username = trim($_POST['username']);
  $email = trim($_POST['email']);
  $password = $_POST['password'];

  // Check if the email already exists in the database
  $query_check = "SELECT * FROM `scerns_login` WHERE email='$email'";
  $result_check = mysqli_query($conn, $query_check);
  $count = mysqli_num_rows($result_check);

  if ($count > 0) {
    // Email already exists, store the inputted values in session variables and redirect back to the signup page
    $_SESSION['fullname'] = $fullname;
    $_SESSION['username'] = $username;
    $_SESSION['contact_number'] = $contact_number;
    $_SESSION['email'] = "Email Already Existing!";
    header("location: ../register.php");
    exit;
} else {
    // If email does not exist, insert new user into the database
    $hashed_password = md5($password); // Hash the password using MD5

    $query1 = "INSERT INTO scerns_login SET
        `fullname`='$fullname',
        `contact_number`='$contact_number',
        `username`='$username',
        `email`='$email',
        `password`='$hashed_password'
        ";
    $query_run1 = mysqli_query($conn, $query1);
    header("location: ../index.php");
    exit;
  }
}
?>