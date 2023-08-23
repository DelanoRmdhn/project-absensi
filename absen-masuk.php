<?php 
session_start();

if( !isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}

require 'functions/functions.php';

date_default_timezone_set("Asia/Jakarta");

if(isset($_POST["absen"])){
  if(absenMasuk($_POST) > 0){
    echo "
    <script>
        alert('Absen Masuk Berhasil!');
    </script>
    ";
} else {
    echo "
    <script>
        alert('Absen Masuk Gagal!');
    </script>
    ";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style/dashboard.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Dashboard</title> 
</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <!--<img src="logo.png" alt="">-->
                </span>

                <div class="text logo-text">
                    <span class="name">Dashboard</span>
                    <span class="profession"><?= $_SESSION["login"];?></span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">
                <ul class="menu-links p-0">
                    <li class="nav-link">
                        <a href="dashboardUser.php">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="absen-masuk.php">
                            <i class='bx bx-time bx-rotate-270 icon' ></i>
                            <span class="text nav-text">Absensi Masuk</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="absen-pulang.php">
                            <i class='bx bx-time-five icon'></i>
                            <span class="text nav-text">Absensi Pulang</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-table icon'></i>
                            <span class="text nav-text">Rekap Absensi</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="logout.php">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>
            </div>
        </div>

    </nav>

    <section class="home">
        <div class="container">
          <h1 class="mt-5 text">Silahkan Melakukan Absensi Kehadiran, <?= $_SESSION["login"];?></h1>
          <div class="card ms-5 me-5">
            <div class="card-body">
              <div class="mb-3 mt-5">
                <div class="row">
                  <div class="col">
                    <label class="ms-5">Nama Siswa PKL</label>
                  </div>
                  <div class="col">
                  <form action="" method="post">
                  <input type="text" class="form-control" name="username" value="<?=$_SESSION["login"] ?>"disabled>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col">
                  <label class="ms-5">Waktu Absensi Masuk</label>
                </div>
                <div class="col">
                  <input type="datetime-local" name="jamMasuk" class="form-control" value="<?= date("Y-m-d H:i:s")?>"disabled> 
                </div>
              </div>
              <div class="mx-5 mt-4">
                <button style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: 2.5rem;" type="submit" class="btn btn-success" name="absen">Absen Masuk</button>
              </div>
              </form>
            </div>
          </div>
    </section>

    <script>
    const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle");


toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})
;
    </script>

</body>
</html>