<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SCERNS | Register</title>

  <link rel="icon" href="assets/img/icon.png">
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

<body>
<form action="" method="post">
  <section class="vh-100">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="text-center" style="border-radius: 1rem;">
            <h3 class="fw-bold mb-4">Register your Account</h3>

            <div class="form-floating mb-2 text-start rounded-4">
                <input type="text" id="textInput" class="form-control rounded-4" id="floatingInput" placeholder="Fullname" name="fullname" autocomplete="off" maxlength="20">
                <label for="validationServer01" class="form-label">Fullname</label>
            </div>

            <div class="form-floating mb-2 text-start rounded-4">
                <input type="text" id="textInput" class="form-control rounded-4" id="floatingInput" placeholder="Username" name="username" autocomplete="off" maxlength="20">
                <label for="validationServer01" class="form-label">Username</label>

            </div>

            <div class="form-floating mb-2 text-start rounded-4" id="emailForm">
                <input type="text" id="emailInput" class="form-control rounded-4" id="floatingInput" placeholder="Email" name="email" autocomplete="" required>
                <label for="emailInput" class="form-label">Email</label>
                <span style="color: red;"></span>
            </div>

            <div class="form-floating mb-2 text-start rounded-4">
                <input type="password" id="newPassword" class="form-control rounded-4" id="floatingPassword" name="password" placeholder="Password" minlenth="10" maxlength="15" required>
                <label for="floatingPassword">Password</label>
            </div>

            <div class="form-floating mb-2 text-start rounded-4">
                <input type="password" id="confirmPassword" class="form-control rounded-4" name="confirm_password" id="floatingPassword" placeholder="ConfirmPassword" minlenth="10" maxlength="15" required>
                <label for="floatingconpassword" class="form-label">Confirm Password</label>
            </div>
            
            <button type="submit" class="btn btn-primary btn-lg rounded-pill w-50 mt-2" style="box-shadow: -4px 4px #3FAA3D;" name="signup">Register Account</button>
            <h5 class="text-center my-3">or</h5>
 
            <div class="d-flex justify-content-center">
              <button type="button" onclick="signIn()" class="btn btn-light btn-lg rounded-pill fw-bold" style="box-shadow: -4px 4px #BEB5B5;">
                <img src="assets/img/google.png" alt="Google Logo"  style="width: 30px; height: 30px; margin-right: 5px;"> Continue with Google
              </button>
            </div>
 
            <div class="d-flex justify-content-around mt-3">
              <a class="text-decoration-none text-dark">Already have an account?</a>
              <a class="text-decoration-none text-primary" href="index.php">Login</a>
            </div>
            <br><br>

          </div>  
        </div>
      </div>
    </div>
  </section>
</form>

</body>
</html>
