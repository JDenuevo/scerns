<?php 
include '../conn.php';
session_start();
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
    <?php include '../respondent/components/navbar-top.php'; ?>
  </div>

  <?php
  $sql = "SELECT * FROM scerns_login WHERE email = '$email'";
  $results = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($results);

  // Check if the image is null or empty
  if ($row['prof_img'] == null || empty($row['prof_img'])) {
      // Set default image path if img is null or empty
      $src = "../assets/img/default.jpg";
  } else {
      // Use the image from the database
      $imageData = base64_encode($row['prof_img']);

      // Determine the image MIME type based on the content
      $imageInfo = getimagesizefromstring(base64_decode($imageData));
      $mime_type = $imageInfo['mime'];

      // Construct the src attribute dynamically
      $src = "data:{$mime_type};base64,{$imageData}";
  }
  ?>
  <div class="container p-4">
    
      <h3 class="mb-3">Manage your Account</h3>
      <form action="../php/change_profile.php" method="post" enctype="multipart/form-data">

        <div class="text-center mb-3 ">
          <img id="existingImage" src="<?php echo $src; ?>" alt="" width="200" height="200" class="rounded-circle border border-dark">
          <br>
          <label class="form-label mt-2">Change Profile</label>
          <br>
          <input class="form-control form-control-sm w-50 mx-auto" id="imageInput" name="prof_img" type="file" accept=".jpeg, .jpg, .png">
        </div>

        <div class="form-floating mb-3">
          <input type="hidden" name="id" value="<?php echo $row['id'];?>">
          <input type="text" class="form-control" id="username" name="username" value="<?php echo $row['username']; ?>">
          <label for="username">Username</label>
        </div>

        <div class="form-floating mb-3">
          <input type="text" id="Fullname" class="form-control rounded-4" id="floatingInput" name="fullname" value="<?php echo $row['fullname']; ?>" autocomplete="off" required pattern="^[A-Za-z\s]+$">
          <label for="Fullname">Fullname</label>
        </div>

        <div class="form-floating mb-3">
          <input type="text" id="Contact" class="form-control rounded-4" name="contact_number" value="<?php echo $row['contact_number']; ?>" autocomplete="off" required pattern="[0-9]{11}">
          <label for="Contact">Contact Number</label>
        </div>

        <div class="form-floating mb-3">
          <input type="email" id="Email" class="form-control rounded-4" name="email" value="<?php echo $row['email']; ?>" autocomplete="off" required>
          <label for="Email">Contact Number</label>
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
  <?php include '../respondent/components/navbar-bottom.php'; ?>

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

  document.getElementById('imageInput').addEventListener('change', function (event) {
      const input = event.target;
      if (input.files && input.files[0]) {
        const file = input.files[0];
        const validImageTypes = ["image/jpeg", "image/png"];

        if (validImageTypes.includes(file.type)) {
          const reader = new FileReader();

          reader.onload = function (e) {
            document.getElementById('existingImage').src = e.target.result;
          };

          reader.readAsDataURL(file);
        } else {
          alert("Please select a valid JPEG or PNG file.");
          input.value = "";
        }
      }
    });
  </script>
 
</body>
</html>

