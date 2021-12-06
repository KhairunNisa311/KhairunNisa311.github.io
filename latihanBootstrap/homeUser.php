<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Pengguna </title>
     <!-- Menyisipkan Bootstrap-->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <div class="jumbotron bg-info text-white">
              <h1>Hello, <b><?=$_SESSION['nama']?></b></h1>
              <p>Selamat Datang di Halaman Pengguna, Anda Berhasil Login !!! </p>
              <hr class="my-4">
              <a class="btn btn-primary btn-danger" href="logoutUser.php" role="button">Logout</a>
              <a class="btn btn-primary btn-warning" href="tampilData.php" role="button">Tampil Data</a>
              <a class="btn btn-primary btn-primary" href="kalkulator.html" role="button">Kalkulator</a>
          </div>
          <p>Mata Kuliah Desain dan Pemrograman Web</p>
      </div>
    </div>
</body>
</html>