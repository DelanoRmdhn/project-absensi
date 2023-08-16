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

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Login</title>
</head>
<body>
  <h1>Halaman Login</h1>
  <form action="" method="post">
    <ul>
      <li>
        <label for="username">Username :</label>
        <input type="text" name="username" id="username">
      </li>
      <li>
        <label for="password">Psassword :</label>
        <input type="password" name="password" id="password">
      </li>
      <li>
        <button type="submit" name="login">Login</button>
      </li>
    </ul>
  </form>
</body>
</html>