<?php 
session_start();
require 'functions/functions.php';

if(isset($_POST["login"])){
  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username'");

  //apakah username ada di database
  if(mysqli_num_rows($result) === 1 ){
  
    //cek password
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row["password"])){
        // set session
        //jika login berhasil masuk ke halaman index.php
        $_SESSION["login"] = $username ;
        header("Location: dashboardUser.php");
        exit;
    }
  } else {
    echo "
    <script>
      alert('username atau password Salah!');
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
    <title>Halaman Login</title>
  </head>
  <body>
  <div class="position-absolute top-0 start-50 translate-middle-x">
    <div class="form-container">
      <div class="d-flex align-items-center">
        <div class="flex-shrink-0">
          <img class="img-register" src="img/register-img.png" alt="...">
        </div>
        
        <div class="flex-grow-1 ms-5">
          <h4 class="login-title">Halaman Login Siswa PKL</h4>
          <form action="" method="post">
            <div class="mb-3">
              <label for="username" class="form-label">Nama Siswa PKL</label>
              <input type="text" name="username" class="form-control" id="username"  placeholder="Masukan Nama Anda" required autofocus>
            </div>
      
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="password" placeholder="Masukan Password Anda" required>
            </div>

            <div class="mb-3">
              <input type="checkbox" name="remember" id="remember">
              <label for="remember" class="form-label">Ingat Saya</label>
            </div>
            <div class="mb-3">
              <a href="register.php">belum punya akun?registrasi disini</a>
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