<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SCERNS | New Password</title>

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

<form action="" method="">
  <section class="vh-100">
    <div class="container p-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5 shadow rounded-4 p-4 bg-light">
          <div class="text-center" style="border-radius: 1rem;">

            <h1>Forgot Password</h1>

            <p class="text-muted">Create a new password on your account.</p>

            <div class="form-floating mb-3 text-start" style="position: relative;">
              <input type="password" class="form-control rounded-4" id="NewPassword" name="password" placeholder="Password" value="" required>
              <label for="NewPassword">New Password</label>
              <span class="toggle-password mt-1" id="togglePassword1"><i class="fa-regular fa-eye"></i></span>
            </div>

            <div class="form-floating mb-3 text-start" style="position: relative;">
              <input type="password" class="form-control rounded-4" id="ConfirmPassword" name="password" placeholder="Password" value="" required>
              <label for="ConfirmPassword">Confirm Password</label>
              <span class="toggle-password mt-1" id="togglePassword2"><i class="fa-regular fa-eye"></i></span>
            </div>
            
            <button type="submit" class="btn btn-primary btn-lg rounded-pill w-50 mt-2">Change Password</button>

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

<script src="./assets/js/bootstrap.bundle.js"></script>
<script src="./assets/js/script.js"></script>

<script>
  const newPasswordInput = document.getElementById('NewPassword');
  const confirmPasswordInput = document.getElementById('ConfirmPassword');
  const togglePassword1 = document.getElementById('togglePassword1');
  const togglePassword2 = document.getElementById('togglePassword2');

  togglePassword1.addEventListener('click', () => {
    togglePasswordVisibility(newPasswordInput, togglePassword1);
  });

  togglePassword2.addEventListener('click', () => {
    togglePasswordVisibility(confirmPasswordInput, togglePassword2);
  });

  function togglePasswordVisibility(passwordInput, togglePassword) {
    if (passwordInput.type === 'password') {
      passwordInput.type = 'text';
      togglePassword.innerHTML = '<i class="fa-regular fa-eye-slash"></i>';
    } else {
      passwordInput.type = 'password';
      togglePassword.innerHTML = '<i class="fa-regular fa-eye"></i>';
    }
  }
</script>

</body>
</html>


