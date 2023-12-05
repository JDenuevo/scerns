<?php
session_start();
include 'conn.php';

// if (isset($_SESSION['status'])) {
//   if($_SESSION['status'] == "Logged In As User"){
//       header("Location: user/home.php");
//       exit();
//   }
// }
// Check if the session variables are set
$username = isset($_SESSION['username']) ? $_SESSION['username'] : '';
$email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
$contact_number = isset($_SESSION['contact_number']) ? $_SESSION['contact_number'] : '';
$fullname = isset($_SESSION['fullname']) ? $_SESSION['fullname'] : '';

// Clear the session variables
unset($_SESSION['fullname']);
unset($_SESSION['username']);
unset($_SESSION['contact_number']);
unset($_SESSION['email']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SCERNS | Register</title>

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


  <section class="vh-100">
    <div class="container p-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5 shadow rounded-4 p-4 bg-light">
          <div class="text-center" style="border-radius: 1rem;">
            <h1>Create Account</h1>

            <form onsubmit="return validateForm()" action="php/sign_up.php" method="post">

              <p class="text-muted">Register your account</p>

              <div class="form-floating mb-2">
                <input type="text" id="" class="form-control rounded-4" id="floatingInput" placeholder="Juan Dela Cruz" name="fullname" value="<?php echo $fullname; ?>" autocomplete="off" required pattern="^[A-Za-z\s]+$">
                <label for="validationServer01" class="form-label">Fullname</label>
            </div>


              <div class="form-floating mb-2" id="emailForm" style="text-align: left;">
                  <input type="email" class="form-control rounded-4" id="floatingInput" placeholder="Email" name="email" autocomplete="" required>
                  <label for="emailInput" class="form-label">Email</label>
                  <span style="color: red; font-size: 80%;"><?php echo $email; ?></span>
              </div>

              <div class="form-floating mb-2">
                <input type="text" id="floatingInput" class="form-control rounded-4" placeholder="09123456789" name="contact_number" value="<?php echo $contact_number; ?>" autocomplete="off" required pattern="[0-9]{11}">
                <label for="floatingInput" class="form-label">Contact Number</label>
              </div>


              <div class="form-floating mb-2">
                  <input type="text" id="" class="form-control rounded-4" id="floatingInput" placeholder="Username" name="username" value="<?php echo $username; ?>" autocomplete="off" maxlength="20" required>
                  <label for="validationServer01" class="form-label">Username</label>
              </div>

              <div class="form-floating mb-2">
                <input type="password" id="password" class="form-control rounded-4" name="password" placeholder="Password" minlength="8" maxlength="15" required>
                <label for="password">Password</label>
                <span class="toggle-password mt-1" id="togglePassword3"><i class="fa-regular fa-eye"></i></span>
              </div>

              <div class="form-floating mb-2" style="text-align: left;">
                <input type="password" class="form-control rounded-4" name="confirm_password" id="confirm_password" placeholder="Confirm Password" minlength="8" maxlength="15" required>
                <label for="confirm_password" class="form-label">Confirm Password</label>
                <span id="passwordError" style="color: red; font-size: 80%;"></span>
                <span class="toggle-password mt-1" id="togglePassword4"><i class="fa-regular fa-eye"></i></span>
              </div>
              
              <button type="submit" name="signup" class="btn btn-primary btn-lg rounded-pill w-50 mt-2">Register Account</button>
            
            </form>

            <div class="d-flex justify-content-around mt-5">
              <a class="text-decoration-none text-dark">Already have an account?</a>
              <a class="text-decoration-none text-primary" href="./index.php">Login</a>
            </div>
           
          </div>  
        </div>
      </div>
    </div>
  </section>
    
  <script>
    const passwordInput = document.getElementById('password');
    const confirmPasswordInput = document.getElementById('confirm_password');
    const togglePassword3 = document.getElementById('togglePassword3');
    const togglePassword4 = document.getElementById('togglePassword4');

    togglePassword3.addEventListener('click', () => {
      togglePasswordVisibility(passwordInput, togglePassword3);
    });

    togglePassword4.addEventListener('click', () => {
      togglePasswordVisibility(confirmPasswordInput, togglePassword4);
    });

    function togglePasswordVisibility(input, togglePassword) {
      if (input.type === 'password') {
        input.type = 'text';
        togglePassword.innerHTML = '<i class="fa-regular fa-eye-slash"></i>';
      } else {
        input.type = 'password';
        togglePassword.innerHTML = '<i class="fa-regular fa-eye"></i>';
      }
    }
  </script> 

  <script>
    function validateForm() {
      var password = document.getElementById("password").value;
      var confirmPassword = document.getElementById("confirm_password").value;
      var passwordError = document.getElementById("passwordError");

      if (password !== confirmPassword) {
        passwordError.innerText = "Passwords do not match";
        return false;
      } else {
        passwordError.innerText = "";
      }

      return true;
    }
  </script>

  <script>
    if (window.performance) {
      if (performance.navigation.type == 1) {
        // Reloaded the page using the browser's reload button
        window.location.href = "register.php";
      }
    }
  </script>
</body>
</html>
