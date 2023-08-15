<?php 
require 'functions/functions.php';

if(isset($_POST["login"])){
  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($conn,"SELECT * FROM user WHERE username = '$username'");
  if(mysqli_num_rows($result) === 1 ){
    $row = mysqli_fetch_assoc($result);
    header("Location: dashboardUser.php");
  }
  else{
    echo "
    <script>
      alert('Passwordd atau Username Salah!');
    </script>
    ";
  }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <title>slkfmslm</title>
  </head>
  <body>
  <div class="position-absolute top-0 start-50 translate-middle-x">
    <div class="form-container">
      <div class="d-flex align-items-center">
        <div class="flex-shrink-0">
          <img class="img-register" src="img/register-img.png" alt="...">
        </div>
        
        <div class="flex-grow-1 ms-5">
          <h4 class="login-title">Login Form</h4>
          <form action="" method="post">
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" name="username" class="form-control" id="username"  placeholder="Enter your Username here" required>
            </div>
      
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="password" placeholder="Enter your Password here" required>
            </div>

            <div class="mb-3">
              <input type="checkbox" name="remember" id="remember">
              <label for="remember" class="form-label">Remember me</label>
            </div>
            <div class="mb-3">
            <button button type="submit" class="btn btn-primary" name="login">Login</button>
            </div>
          </form> 
        </div>
      </div>
    </div>
  </div>
  </body>
</html>