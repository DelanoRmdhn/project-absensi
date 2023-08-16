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


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Registrasi</title>
</head>
<body>
  <h1>Halaman Registrasi</h1>
  <style>
    label {
     display: block; 
    }
  </style>

  <form action="" method="post">
    <ul>
      <li>
        <label for="username">Masukan Username : </label>
        <input type="text" name="username" id="username">
      </li>
      <li>
        <label for="password">Masukan Password : </label>
        <input type="password" name="password" id="password">
      </li>
      <li>
        <label for="confirmPassword">Konfirmasi Password : </label>
        <input type="password" name="confirmPassword" id="confirmPassword">
      </li>
      <li>
        <button type="submit" name="register">Registrasi!</button>
      </li>
    </ul>
  </form>
</body>
</html>