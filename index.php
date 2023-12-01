<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SCERNS | Home</title>

  <link rel="icon" href="./assets/img/orig-logo.png">
  
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Open+Sans:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
  
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

  <!-- Main Template -->
  <link rel="stylesheet" href="./assets/css/bootstrap.css">
  <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body style="background-color: #618264;">

<form action="" method="post">
  <section class="vh-100">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5 shadow rounded-4 px-5 py-5 bg-light">
          <div class="text-center" style="border-radius: 1rem;">

            <img src="./assets/img/orig-logo.png" class="img-fluid px-1 mb-3">

            <h1>SCERNS</h1>

            <div class="form-floating mb-3 text-start">
              <input type="text" class="form-control rounded-4" name="username" id="username" placeholder="Username" value="<?php if(isset($_COOKIE['fnbkn'])) echo $_SESSION['fnbkn']; ?>" required>
              <label for="username" class="form-label">Username</label>
            </div>

            <div class="form-floating mb-3 text-start" style="position: relative;">
              <input type="password" class="form-control rounded-4" id="floatingPassword" name="password" placeholder="Password" value="<?php if(isset($_COOKIE['qbtuyqug'])) echo $_SESSION['qbtuyqug']; ?>" required>
              <label for="floatingPassword">Password</label>
              <span class="toggle-password mt-1" id="togglePassword"><i class="fa-regular fa-eye"></i></span>
            </div>

            <div class="my-3 d-flex justify-content-between">
              <label>
                <input type="checkbox" name="remember" id="remember" checked> Remember me
              </label>
              <a href="./forgotpass.php" class="text-decoration-none text-secondary">Forgot password?</a>
            </div>

            <button type="submit" class="btn btn-primary btn-lg m-3 rounded-pill fw-bold w-50 mt-2">Log In</button>

            <div class="d-flex justify-content-around mt-3">
              <a class="text-decoration-none text-dark">Don't have Account?</a>
              <a class="text-decoration-none text-primary" href="./register.php">Create Account</a>
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

const passwordInput = document.getElementById('floatingPassword');
const togglePassword = document.getElementById('togglePassword');

togglePassword.addEventListener('click', () => {
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        togglePassword.innerHTML = '<i class="fa-regular fa-eye-slash"></i>';
    } else {
      passwordInput.type = 'password';
      togglePassword.innerHTML = '<i class="fa-regular fa-eye"></i>';
  }
});

</script>

</body>
</html>