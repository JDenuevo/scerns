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

<form action="" method="">
  <section class="vh-100">
    <div class="container p-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5 shadow rounded-4 p-4 bg-light">
          <div class="text-center" style="border-radius: 1rem;">

            <h1>Create Account</h1>

            <p class="text-muted">Register your account</p>

            <div class="form-floating mb-2" id="emailForm">
                <input type="email" id="" class="form-control rounded-4" id="floatingInput" placeholder="Email" name="email" autocomplete="" required>
                <label for="emailInput" class="form-label">Email</label>
            </div>

            <div class="form-floating mb-2">
                <input type="text" id="" class="form-control rounded-4" id="floatingInput" placeholder="Username" name="username" autocomplete="off" maxlength="20">
                <label for="validationServer01" class="form-label">Username</label>
            </div>

            <div class="form-floating mb-2">
                <input type="password" id="" class="form-control rounded-4" id="floatingPassword" name="password" placeholder="Password" minlenth="10" maxlength="15" required>
                <label for="floatingPassword">Password</label>
            </div>

            <div class="form-floating mb-2">
                <input type="password" id="" class="form-control rounded-4" name="confirm_password" id="floatingPassword" placeholder="ConfirmPassword" minlenth="10" maxlength="15" required>
                <label for="floatingconpassword" class="form-label">Confirm Password</label>
            </div>
            
            <button type="submit" class="btn btn-primary btn-lg rounded-pill w-50 mt-2">Register Account</button>

            <div class="d-flex justify-content-around mt-5">
              <a class="text-decoration-none text-dark">Already have an account?</a>
              <a class="text-decoration-none text-primary" href="./index.php">Login</a>
            </div>
           
          </div>  
        </div>
      </div>
    </div>
  </section>
</form>

</body>
</html>
