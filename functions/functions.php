<?php 
$conn = mysqli_connect('localhost','root','','databaseSiswaPkl');

//function registrasi
function register($data){
  global $conn;

  $username = strtolower(stripslashes($data["username"]));
  $password = mysqli_real_escape_string($conn,$data["password"]);
  $confirmPassword = mysqli_real_escape_string($conn,$data["confirmPassword"]);

  //cek password
  if($password !== $confirmPassword){
    echo "
    <script>
      alert('Password Tidak Sama!');
    </script>
    ";
    return false;
  }

  //cek username apakah sudah terdaftar?
  $result = mysqli_query($conn,"SELECT username FROM user WHERE username = '$username'");
  if(mysqli_fetch_assoc($result)){
    echo "
      <script>
        alert('Username Sudah Terdaftar');
      </script>
    ";
    return false;
  }

  $password = password_hash($password,PASSWORD_DEFAULT);

  //memasukan ke dalam tabel user pada database
  mysqli_query($conn,"INSERT INTO user VALUE('','$username','$password')");
  return mysqli_affected_rows($conn);
}

//function dashboard
?>