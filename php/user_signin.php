<?php
session_start();
include '../conn.php';

$usernameVal = $_POST["username"];
$passwordVal = $_POST["password"];

$cookie_time = 60 * 60 * 24 * 30; // 30 days

if (isset($_POST['remember'])) {
    $escapedRemember = mysqli_real_escape_string($conn, $_POST['remember']);
    $cookie_time_Onset = time() + $cookie_time; // Calculate the expiration time

    if (isset($escapedRemember)) {
        /*
         * Set Cookie from here for one month
         * Hash the username and password using md5() before setting the cookie
         * */
        setcookie("fnbkn", $usernameVal, $cookie_time_Onset, '/'); // Set cookie with correct expiration time
        setcookie("qbtuyqug", $passwordVal, $cookie_time_Onset, '/'); // Set cookie with correct expiration time

        $_SESSION['fnbkn'] = $usernameVal;
        $_SESSION['qbtuyqug'] = $passwordVal;
    }
} else {
    $cookie_time_fromOffset = time() - $cookie_time; // Calculate the expiration time
    setcookie("fnbkn", '', $cookie_time_fromOffset, '/'); // Unset cookie with correct expiration time
    setcookie("qbtuyqug", '', $cookie_time_fromOffset, '/'); // Unset cookie with correct expiration time

    $_SESSION['fnbkn'] = '';
    $_SESSION['qbtuyqug'] = '';
}

if (isset($_POST['username']) && isset($_POST['password'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }
		$uname = validate($_POST['username']);
        $pass = validate($_POST['password']);
        // hashing the password
        $pass = md5($pass);

    $sql = "SELECT * FROM scerns_login WHERE username='$uname'";
    if ($rs = $conn->query($sql)) {
        if ($rs->num_rows > 0) {
            $row = $rs->fetch_assoc();
            $user_name = $row['username'];
            $id = $row['id'];

            // authenticate the user
            if ($row['password'] === $pass) {
                $_SESSION['email'] = $row['email'];
                $_SESSION['fullname'] = $row['fullname'];
                $_SESSION['contact_number'] = $row['contact_number'];
                $_SESSION['status'] = "Logged In As User";
                header("Location: ../user/home.php");
                exit();
            } else {
                $errors[] = "Invalid Credentials!";
               
            }
        } else {
            $errors[] = "Username not found. Please try again!";
        }
    } else {
        $errors[] = "Something went wrong. Please try again later.";
    }

    // check for error
    if (!empty($errors)) {
        // Redirect back to the login page with the error messages
        $errorString = implode(',', $errors);
        header('Location: ../index.php?errors=' . urlencode($errorString));
        exit();
    }
} else {
    // if the username or password is not set, redirect back to the login page
    header('Location: ../index.php');
    exit();
}
?>