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
    
    <link rel="stylesheet" href="style//dashboard.css">

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
                    <span class="profession">User</span>
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
                            <i class='bx bx-bar-chart-alt-2 icon' ></i>
                            <span class="text nav-text">Absensi Masuk</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="absen-pulang.php">
                            <i class='bx bx-bell icon'></i>
                            <span class="text nav-text">Absensi Pulang</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="persentase-kehadiran.php">
                            <i class='bx bx-pie-chart-alt icon' ></i>
                            <p class="text nav-text">Persentase 
                                Kehadiran</p>
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
        <div class="text">Selamat Datang, User</div>
        
        <div class="d-flex flex-row mb-3 p-3">
            <div class="p-4">
                <div class="card text-bg-success mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4 p-4">
                            <img src="img/register-img.png" class="img-fluid rounded-start" alt="...">
                        </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title mt-3">Absensi Masuk</h5>
                            <p class="card-text">Setiap Siswa PKL Sari Teknologi Wajib melakukan Absensi Masuk.</p>
                            <button type="button" class="btn btn-warning">Absen Masuk</button>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="p-4">
                <div class="card text-bg-light mb-3" style="max-width: 540px; max-height: 500px;">
                    <div class="row g-0">
                        <div class="col-md-4 p-4">
                            <img src="img/register-img.png" class="img-fluid rounded-start" alt="...">
                        </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title mt-3">Absensi Pulang</h5>
                            <p class="card-text">Setiap Siswa PKL Sari Teknologi Wajib melakukan Absensi Pulang.</p>
                            <button type="button" class="btn btn-warning">Absen Pulang</button>

                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="p-4">
                <div class="card text-bg-light mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4 p-4">
                            <img src="img/register-img.png" class="img-fluid rounded-start" alt="...">
                        </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title mt-3">Persentase Kehadiran</h5>
                            <p class="card-text">Persentase Kehadiran Siswa PKL Selama Prakerin di Sari Teknologi.</p>
                            <button type="button" class="btn btn-warning">Persentase Kehadiran</button>

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