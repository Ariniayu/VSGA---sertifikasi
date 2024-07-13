<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
  


<?php
session_start();
if ($_SESSION['sesi']== null) {
    header('Location: index.php');
}
?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">SIMPERPUS</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="home.php">Home</a>
              </li>
              
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                  Data Master
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="buku_read.php">Buku</a></li>
                  <li><a class="dropdown-item" href="anggota_read.php">Anggota</a></li>
                  
                </ul>
              </li>
              <li class="nav-item ">
                <a class="nav-link " href="transaksi_read.php" aria-expanded="true"> Transaksi </a>
                <a class="nav-link " href="transaksi_lap.php" aria-expanded="true"> Lap.Transaksi </a>               
              </li>
            </ul>
          </div>
          <div class="ml-auto">
                <a href="logout.php" class=""btn btn-outline-secondary><i class="fa-solid fa-power-off"></i> Logout</a>
          </div>
        </div>
      </nav>

      </body>
</html>