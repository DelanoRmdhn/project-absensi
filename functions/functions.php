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

//function read
function query($query){
  global $conn;

  $result = mysqli_query($conn,$query);
  $rows = [];

  while($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
  }
  return $rows;
}

//funtion absen masuk
function absenMasuk($data){
  global $conn;
  $username1 = $_SESSION["login"];
  $jamMasuk = date("Y-m-d H:i:s");

  //cek apakah ada data di database
  $result = mysqli_query($conn,"SELECT username FROM tb_absen WHERE username = '$username1'");
  if(mysqli_fetch_assoc($result)){
    echo "
    <script>
      alert('Anda Sudah Absen!');
      document.location.href = 'dashboardUser.php';
    </script>
    ";
    return false;
  }

  $query = "INSERT INTO tb_absen (username, jamMasuk) VALUES ('$username1','$jamMasuk')";
  mysqli_query($conn,$query);

  if($jamMasuk > 10.00){
    echo "
      <script>
        alert('ANDA TELAT BAYARKAN DENDA PADA SEKRETARIS!');
        document.location.href = 'dashboardUser.php';
      </script>
    ";
  }

  return mysqli_affected_rows($conn);
  }

//function absen pulang
function absenPulang($data){
  global $conn;

  $username1 = $_SESSION["login"];
  $time = date('H:i:s');

    //cek apakah ada data di database
    $result = mysqli_query($conn,"SELECT username FROM tb_absen WHERE username = '$username1'");
    if(mysqli_fetch_assoc($result)){
      echo "
      <script>
        alert('Anda Sudah Absen!');
        document.location.href = 'dashboardUser.php';
      </script>
      ";
      return false;
    }

$query = "UPDATE tb_absen SET jamKeluar='$time' WHERE username='$username1'";
mysqli_query($conn,$query);

return mysqli_affected_rows($conn);
}
?>