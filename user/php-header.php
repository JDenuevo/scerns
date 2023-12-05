<?php 
include '../conn.php';
session_start();

if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
}

if (isset($_SESSION['fullname'])) {
    $fullname = $_SESSION['fullname'];
}

if (isset($_SESSION['contact_number'])) {
    $contact_number = $_SESSION['contact_number'];
}

if(!isset($_SESSION["status"]) || $_SESSION["status"] !== "Logged In As User"){
    header("location: ../index.php");
    exit;
}
?>