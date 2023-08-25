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
    <link rel="stylesheet" href="style/queriesForm.css">
    <title>Halaman Registrasi</title>
  </head>
  <body>
  <div class="position-absolute top-0 start-50 translate-middle-x">
    <div class="form-container">
    <div class="custom-align row align-items-center">
            <div class="col-md-5">
              <div class="d-flex justify-content-center">
                <img class="img-register" src="img/register-img.png" alt="...">
              </div>
            </div>
            <div class="col-md-7">
                <h4 class="login-title text-md">Registrasi Siswa PKL</h4>
                <form action="" method="post">
                    <div class="mb-3 custom-margin2">
                        <label for="username">Nama Siswa PKL</label>
                        <input type="text" name="username" class="form-control" id="username" placeholder="Masukan Nama Anda" required autofocus>
                    </div>
                    <div class="mb-3 custom-margin2">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Buat Password Anda" required>
                    </div>
                    <div class="mb-3 custom-margin2">
                        <label for="confirmPassword">Confirm Password</label>
                        <input type="Password" name="confirmPassword" class="form-control" id="confirmPassword" placeholder="Konfirmasi Password" required>
                    </div>
                    <div class="mb-3 custom-margin2">
                        <p>
                        Sudah Punya akun?<a href="login.php">Login</a></p>
                    </div>
                    <div class="mb-3 custom-margin2">
                        <button type="submit" class="btn btn-primary custom-btn" name="register">Register!</button>
                    </div>
                </form>
            </div>
        </div>
  </div>
  </body>
</html>