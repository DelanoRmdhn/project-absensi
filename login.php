<?php 
session_start();
require 'functions/functions.php';

if(isset($_COOKIE["id"]) && isset($_COOKIE["key"])){
  $id = $_COOKIE["id"];
  $key = $_COOKIE["key"];

  $result = mysqli_query($conn,"SELECT username FROM tb_user WHERE id = $id");
  $row = mysqli_fetch_assoc($result);

  //menyamakan nama username
    //cek cookie dan username
    if( $key === hash('sha256',$row["username"])){
      $_SESSION["login"] = true;
    }
} 

if(isset($_SESSION["login"])){
  header("Location: dashboardUser.php");
}

if(isset($_POST["login"])){
  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username'");

  //apakah username ada di database
  if(mysqli_num_rows($result) === 1 ){
  
    //cek password
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row["password"])){
        $_SESSION["login"] = $username ;

        if(isset($_POST["remember"])){
          $cookieExpire = time() + (12 * 3600);
          setcookie('id',$row["id"], $cookieExpire);
          setcookie('key', hash('sha256',$row["username"]), $cookieExpire);
        }
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
    <link rel="stylesheet" href="style/queriesForm.css">
    <title>Halaman Login</title>
  </head>
  <body>
  <div class="position-absolute top-0 start-50 translate-middle-x">
    <div class="form-container">
      <div class="costum-align row align-iems-center">
        <div class="col-md-5">
        <div class="d-flex justify-content-center">
          <img class="img-register" src="img/register-img.png" alt="...">
        </div>
        </div>
        
        <div class="col-md-7">
          <h4 class="login-title text-md">Halaman Login Siswa PKL</h4>
          <form action="" method="post">
            <div class="mb-3 custom-margin2">
              <label for="username">Nama Siswa PKL</label>
              <input type="text" name="username" class="form-control" id="username"  placeholder="Masukan Nama Anda" required autofocus>
            </div>
      
            <div class="mb-3 custom-margin2">
              <label for="password">Password</label>
              <input type="password" name="password" class="form-control" id="password" placeholder="Masukan Password Anda" required>
            </div>

            <div class="mb-3 custom-margin2">
              <input type="checkbox" name="remember" id="remember">
              <label for="remember">Ingat Saya</label>
            </div>
            <div class="mb-3 custom-margin2">
            <p>belum punya akun?<a href="register.php">registrasi</a></p>
            </div>
            <div class="mb-3 custom-margin2">
            <button button type="submit" class="btn btn-primary" name="login">Login</button>
            </div>
          </form> 
        </div>
      </div>
    </div>
  </div>
  </body>
</html>