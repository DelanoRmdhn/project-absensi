<?php 
session_start();

if( !isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}

require 'functions/functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style/dashboard.css">
    <link rel="stylesheet" href="style/queriesDashboard.css">

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
                        <a href="index.php">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Halaman Utama</span>
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
                        <a href="rekapAbsensi.php">
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
        <div class="text">Selamat Datang, <?= $_SESSION["login"];?></div>
        
        <div class="container">
            <div class="row ms-3 me-3">
                <div class="col-lg-6 mb-4">
                    <div class="card text-bg-success h-100 custom-padding">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-md-4">
                                <img src="img/register-img.png" class="img-fluid rounded-start img-style" alt="...">
                            </div>
                        <div class="col-md-8">
                        
                        <div class="card-body">
                            <h5 class="card-title mt-3">Absensi Masuk</h5>
                            <p class="card-text">Setiap Siswa PKL Sari Teknologi Wajib melakukan Absensi Masuk.</p>
                             <a class="btn btn-warning" href="absen-masuk.php" role="button">Klik untuk absen masuk</a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

                <div class="col-lg-6 mb-4">
                    <div class="card h-100 custom-padding">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-md-4">
                            <img src="img/register-img.png" class="img-fluid rounded-start img-style" alt="...">
                            </div>
                        <div class="col-md-8">
                        
                        <div class="card-body">
                            <h5 class="card-title mt-3">Absensi Pulang</h5>
                            <p class="card-text">Setiap Siswa PKL Sari Teknologi Wajib melakukan Absensi Pulang.</p>
                             <a class="btn btn-warning" href="absen-pulang.php" role="button">Klik untuk absen Pulang</a>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
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