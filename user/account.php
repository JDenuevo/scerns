<?php 
include 'php-header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SCERNS | Account</title>
  <link rel="icon" href="../assets/img/orig-logo.png">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Open+Sans:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
  
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

  <!-- Main Template -->
  <link rel="stylesheet" href="../assets/css/bootstrap.css">
  <link rel="stylesheet" href="../assets/css/style.css">

</head>

<body>

  <div class="text-center other-cont">
    <!-- TOP NAVBAR -->
    <?php include '../user/components/navbar-top.php'; ?>
  </div>
  <?php
    $sql = "SELECT username FROM scerns_login WHERE email = '$email'";
    $results = mysqli_query($conn, $sql);
  
    if ($results) {
      $row = mysqli_fetch_assoc($results);
    }
    ?>
  <div class="container p-4">
    
      <h3 class="mb-3">Manage your Account</h3>
      <form action="../php/change_profle.php" method="post"> 
        <div class="form-floating mb-3">
          <input type="hidden" name="email" value="<?php echo $email; ?>" />
          <input type="text" class="form-control" id="username" name="username" placeholder="New Username" value="<?php echo $row['username'];?>">
          <label for="username">Username</label>
        </div>
        
        <div class="form-floating mb-3 text-start" style="position: relative;">
          <input type="password" class="form-control rounded-4" id="floatingPassword" name="password" placeholder="Password">
          <label for="floatingPassword">Password</label>
          <span class="toggle-password mt-1" id="togglePassword"><i class="fa-regular fa-eye"></i></span>
        </div>

        <button type="submit" class="btn btn-primary rounded-4 w-100">Save changes</button>
    </form>
  </div>

  <br> <br> <br>

  <!-- BOTTOM NAVBAR -->
  <?php include '../user/components/navbar-bottom.php'; ?>

  <script src="../assets/js/bootstrap.bundle.js"></script>
  <script src="../assets/js/jquery-3.7.1.min.js"></script>
  <script src="../assets/js/navbarmenu.js"></script>
  <script src="../assets/js/all.min.js"></script>

    
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
