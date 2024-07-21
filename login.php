<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: index.php");
}
?>
<!doctype html>
<html lang="en">
<head>
  <title>Webleb</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="style3.css">
</head>
<body>
<style>body{
        overflow:auto;
      }</style>
  <?php
  if (isset($_POST["login"])) {
     $email = $_POST["email"];
     $password = $_POST["password"];
      require_once "database.php";
      $sql = "SELECT * FROM users WHERE email = '$email'";
      $result = mysqli_query($conn, $sql);
      $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
      if ($user) {
        if ($result->num_rows > 0) {
          $row = $result->fetch_assoc();
          $_SESSION['email'] = $row['email'];
          header('Location: profile.php');
      }
          if (password_verify($password, $user["password"])) {
              session_start();
              $_SESSION["user"] = "yes";
              header("Location: index.php");
              die();
          }else{
              echo "<div class='alert alert-danger'>Password does not match</div>";
          }
      }else{
          echo "<div class='alert alert-danger'>Email does not match</div>";
      }
  }
  ?>
  <form action="login.php" method="post">  
<div id="stars"></div>
<div id="stars2"></div>
<div id="stars3"></div>
<div class="section">
  <div class="container">
    <div class="row full-height justify-content-center">
      <div class="col-12 text-center align-self-center py-5">
        <div class="section pb-5 pt-5 pt-sm-2 text-center">
          <!-- <h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
          <input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
          <label for="reg-log"></label> -->
          <div class="card-3d-wrap mx-auto">
            <div class="card-3d-wrapper">
              <div class="card-front">
                <div class="center-wrap">
                  <div class="section text-center">
                    <h4 class="mb-4 pb-3">Log In</h4>
                    <div class="form-group">
                      <input type="email" class="email" placeholder="Email" name="email"autocomplete="off">
                      <i class="input-icon uil uil-at"></i>
                    </div>	
                    <div class="form-group mt-2">
                      <input type="password" class="email" name="password" placeholder="Password" required>
                      <i class="input-icon uil uil-lock-alt"></i>
                    </div>
                     <a href="\"><button type="submit-btn" class="btn mt-4" id="button" name="login">Login</button></a>
                    <p class="mb-0 mt-4 text-center"><a href="registration.php" class="link">Register</a></p>
                  </div>
                </div>
              </div>
              <!-- <div class="card-back">
                <!-- Iframe to load card-back.html content
                <iframe id="cardBackIframe" src="" width="100%" height="100%" frameborder="0" scrolling="no"></iframe>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</form>

</body>
</html>