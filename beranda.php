<?php 
    session_start();
    include 'routes.php';
    if($_SESSION['stat_login'] != true){
        echo ' <script> alert("Silahkan login terlebih dahulu!!!" )</script>';
        echo '<script> window.location="login.php" </script>';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HALAMAN ADMINISTRATOR</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
</head>
<body>
      <!-- bagian header -->
      <header>
        <h2 > <a href="beranda.php">Halo,Admin PSB 2020/2021</h2>
        <ul>
            <li> <a href="beranda.php">Beranda</a> </li>
            <li> <a href="data-peserta.php">Data Peserta</a> </li>
            <li> <a href="login.php">keluar</a></li>
           <li> <h3> Anda Login sebagai : <?php echo $_SESSION['nama']; ?></h3></li>
        </ul>
      </header>  
      <!-- bagian content beranda -->
      <section class="content">
          <h2>Beranda Admin</h2>
        <div class="box">   
            <h3>Halo,selamat datang di Administrator PSB online</h3>
        </div>
      </section>
</body>
</html>