<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: index.php");
}
?>
<!doctype html>
<html lang="en">
<head>
  <title>Webleb - Sign Up</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="style3.css">
 
</head>
<body>
<script src="style3.css"></script>
<div id="stars"></div>
<div id="stars2"></div>
<div id="stars3"></div>
  <div class="section">
    
    <div class="container" id="error-container" >
      <style>body{
        overflow:auto;
      }</style>
    <?php
  if (isset($_POST["submit"])) {
     $fullName = $_POST["fullname"];
     $phone_no=$_POST["phone"];
     $address=$_POST["address"];
     $email = $_POST["email"];
     $password = $_POST["password"];
     $passwordRepeat = $_POST["repeat_password"];
     
     $passwordHash = password_hash($password, PASSWORD_DEFAULT);

     $errors = array();
     
     if (empty($fullName) OR empty($email) OR empty($password) OR empty($passwordRepeat)) {
      array_push($errors,"All fields are required.");
     }
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      array_push($errors,"Email is not valid.");
     }
     if (strlen($password)<8) {
 
      array_push($errors,"Password must be at least 8 charactes long.");
     }
     if ($password!=$passwordRepeat) {
      array_push($errors,"Password does not match.");
     }
     require_once "database.php";
     $sql = "SELECT * FROM users WHERE email = '$email'";
     $result = mysqli_query($conn, $sql);
     $rowCount = mysqli_num_rows($result);
     if ($rowCount>0) {
     
      array_push($errors,"Email already exists!.");
     }
     if (count($errors)>0) {
      foreach ($errors as  $error) {
          echo "<div class='alert alert-danger' id='alert4'>$error</div>";
        
      }
     }else{
      
      $sql = "INSERT INTO users (full_name,phone_no,address, email, password) VALUES ( ?,?,?, ?, ? )";
      $stmt = mysqli_stmt_init($conn);
      $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
      if ($prepareStmt) {
          mysqli_stmt_bind_param($stmt,"sssss",$fullName,$phone_no,$address, $email, $passwordHash);
          mysqli_stmt_execute($stmt);
          echo "<div class='alert alert-success'id='alert5'>You are registered successfully.</div>";
      }else{
          die("Something went wrong");
      }
     }
    

    }
  ?>
  <form action="registration.php" method="post">
      <div class="row full-height justify-content-center">
        <div class="col-12 text-center align-self-center py-5">
          <div class="section pb-5 pt-5 pt-sm-2 text-center">
                
            <h4 class="mb-3 pb-3">Sign Up</h4>
            <div class="form-group">
              <input type="text" class="email" id="name"name="fullname" placeholder="Full Name" required>
              <i class="input-icon uil uil-user"></i>
            </div>	
            <div class="form-group mt-2">
              <input type="tel" class="email" id="name" name="phone"placeholder="Phone Number" required>
              <i class="input-icon uil uil-phone"></i>
            </div>	
            <div class="form-group mt-2">
              <input type="address" class="email" id="name" name="address"placeholder="Address" required>
              <i class="input-icon uil uil-location-point"></i>
            </div>	
            <div class="form-group mt-2">
              <input type="email" class="email" id="email"name="email"placeholder="Email" required>
              <i class="input-icon uil uil-at"></i>
            </div>
            <div class="form-group mt-2">
              <input type="password" class="email" id="password"name="password" placeholder="Password" required>
              <i class="input-icon uil uil-lock-alt"></i>
            </div>
            <div class="form-group mt-2">
            <input type="password" class="email" name="repeat_password" placeholder="Repeat Password:">
              <i class="input-icon uil uil-lock-alt"></i>
            </div>
            <input type="submit" class="btn mt-4" value="Register" name="submit">  
            <p class="mb-0 mt-4 text-center"><a href="login.php" class="link">Already Registered Login Here</a></p>
        </div>
        </div>
      </div>
    </div>
  </div></div>
  </form>
  <script>
    setTimeout(function() {
        document.getElementById('alert').style.display = 'none';
    }, 3000); // Hide the message after 5 seconds
    setTimeout(function() {
        document.getElementById('alert1').style.display = 'none';
    }, 3000);
    setTimeout(function() {
        document.getElementById('alert2').style.display = 'none';
    }, 3000);
    setTimeout(function() {
        document.getElementById('alert3').style.display = 'none';
    }, 3000);
    setTimeout(function() {
        document.getElementById('alert4').style.display = 'none';
    }, 3000);
    setTimeout(function() {
        document.getElementById('alert5').style.display = 'none';
    }, 3000);
    setTimeout(function() {
        document.getElementById('alert6').style.display = 'none';
    }, 3000);
    var errorContainer = document.getElementById('error-container');
    var errors = <?php echo json_encode($errors); ?>;

    for (var i = 0; i < errors.length; i++) {
        var errorMessage = document.createElement('div');
        errorMessage.textContent = errors[i];
        errorContainer.appendChild(errorMessage);

        setTimeout(function() {
            errorContainer.removeChild(errorMessage);
        }, 5000); // Hide the message after 5 seconds
    }
</script>
</body>
</html>