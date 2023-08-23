<?php 
session_start();

if( !isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}

include 'functions/functions.php';

$dataAbsen = query("SELECT * FROM tb_absen");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> -->
  </head>
  <body>
    <h1>Hello, world!</h1>
    <table border="1" cellspacing='3' cellpadding='10'>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Masuk</th>
        <th>Pulang</th>
      </tr>
      <tr>
    <?php $i = 1; ?>
    <?php foreach($dataAbsen as $row) :?>
    <td><?= $i; ?></td>
    <td><?= $row["username"]; ?></td>
    <td><?= $row["jamMasuk"]; ?></td>
    <td><?= $row["jamKeluar"]; ?></td>
    </tr>
  <?php $i++?>
  <?php endforeach ?>
    </table>
  </body>
</html>