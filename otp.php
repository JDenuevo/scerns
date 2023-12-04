<?php
session_start();
include 'conn.php';

// if (isset($_SESSION['status'])) {
//     if($_SESSION['status'] == "Logged In As User"){
//         header("Location: user/home.php");
//         exit();
//     }
// }

if (isset($_SESSION['otp'])) {
   $otp = $_SESSION['otp'];
}
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SCERNS | OTP</title>

  <link rel="icon" href="assets/img/orig-logo.png">
  <script src ="scripts/google-api.js"></script>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@1&family=Open+Sans:wght@300;400;500;600;700&family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">  <link rel="stylesheet" href="css\node_modules\bootstrap\dist\css\bootstrap.css">
  
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  
  <!-- Main Template -->
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="assets/css/style.css">

</head>

<body style="background-color: #618264;">

<form method="post" action="php/otp.php">
  <section class="vh-100">
    <div class="container p-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5 shadow rounded-4 p-4 bg-light">
          <div class="text-center" style="border-radius: 1rem;">

            <h1>Forgot Password</h1>

            <p class="text-muted">Input the otp code we sent in your email.</p>

            <div class="form-floating mb-2" id="">
                <input type="hidden" name="correct_otp" value="<?php echo $otp; ?>">
                <input type="number" id="number" class="form-control rounded-4" placeholder="otp" name="otp" autocomplete="" required>
                <label for="number" class="form-label">OTP</label>
            </div>
            
            <button type="submit" onclick="checkCode()" class="btn btn-primary btn-lg rounded-pill w-50 mt-2">Confirm</button>

            <div class="d-flex justify-content-around mt-5">
              <a class="text-decoration-none text-dark">You remembered your account?</a>
              <a class="text-decoration-none text-primary" href="./index.php">Login</a>
            </div>

          </div>  
        </div>
      </div>
    </div>
  </section>
</form>
<script>
    function checkCode() {
        var codeInput = document.getElementById('code').value;
        var wrongMessage = document.getElementById('wrongMessage');
        var correctMessage = document.getElementById('correctMessage');

        if (codeInput === '<?php echo $otp;?>') {
            wrongMessage.style.display = 'none';
            correctMessage.style.display = 'block';
            document.getElementById('code').setCustomValidity('');

        } else {
            wrongMessage.style.display = 'block';
            correctMessage.style.display = 'none';
            document.getElementById('code').setCustomValidity('Invalid code');
        }
    }
</script>
<script src="./assets/js/bootstrap.bundle.js"></script>
<script src="./assets/js/script.js"></script>
<script>
    if (window.performance) {
      if (performance.navigation.type == 1) {
        // Reloaded the page using the browser's reload button
        window.location.href = "otp.php";
      }
    }
</script>
</body>
</html>
