<?php 
$conn = mysqli_connect('localhost','root','','db_siswa');

function register($data){
  global $conn;

  $username = stripslashes($data["username"]);
  $password = mysqli_real_escape_string($conn, $data["password"]);
  $confirmPassword = mysqli_real_escape_string($conn, $data["confirmPassword"]);
  

  //cek konfirmasi password
  if($password !== $confirmPassword){
    echo "
        <script>
          alert('Password anda tidak sama!');
        </script>
    ";
    return false;
  }

  ///cek apakah ada username sudah ada atau ada yang sama
    //mengambil data dari tabel user
  $result = mysqli_query($conn, "SELECT username FROM tb_user WHERE username = '$username'");

  if(mysqli_fetch_assoc($result)){
    echo "
      <script>
        alert('Username Sudah terdaftar!');
      </script>
    ";
    return false;
  }

  //enkripsi password
  $password = password_hash($password,PASSWORD_DEFAULT);

  //masukan data ke dalam database
  mysqli_query($conn,"INSERT INTO tb_user VALUES('','$username','$password')");

  return mysqli_affected_rows($conn);
}

//function dashboard
?>