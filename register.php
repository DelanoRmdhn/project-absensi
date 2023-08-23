<?php 
require 'functions/functions.php';

if(isset($_POST["register"])){

  if(register($_POST) > 0){
    echo "
    <script>
      alert ('Registrasi Berhasil');
      document.location.href = 'login.php';
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
          <h4 class="login-title">Registrasi Siswa PKL</h4>
          <form action="" method="post">
            <div class="mb-3">
              <label for="username" class="form-label">Nama Siswa PKL</label>
              <input type="text" name="username" class="form-control" id="username"  placeholder="Masukan Nama Anda" required autofocus>
            </div>
      
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="password" placeholder="Buat Password Anda" required>
            </div>

            <div class="mb-3">
              <label for="confirmPassword" class="form-label">Confirm Password</label>
              <input type="Password" name="confirmPassword" class="form-control" id="confirmPassword"  placeholder="Konfirmasi Password" required>
            </div>
            <div class="mb-3">
              <a href="login.php">Sudah Punya akun?login disini</a>
            </div>
            <div class="mb-3">
            <button button type="submit" class="btn btn-primary" name="register">Register!</button>
            </div>
          </form> 
        </div>
      </div>
    </div>
  </div>
  </body>
</html>