<?php 
    session_start();
    include 'routes.php';
    $peserta = mysqli_query($conn, "SELECT * FROM tb_pendaftaran WHERE id_pendaftaran = '".$_GET['id']."'");
    $d = mysqli_fetch_object($peserta);
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
          <h2>Data Peserta yang terdaftar</h2>
        <div class="box">   
            <h2>Detail Peserta </h2>
            <table class="table-bukti">
            <tr>
                <td>Kode Pendaftaran</td>
                <td>:</td>
                <td> <?php echo $d->id_pendaftaran ?> </td>
            </tr>
            <tr>
                <td>Nama Calon Siswa</td>
                <td>:</td>
                <td> <?php echo $d->nm_peserta ?> </td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td> <?php echo $d->jurusan ?> </td>
            </tr>
            <tr>
                <td>Tahun Ajaran</td>
                <td>:</td>
                <td> <?php echo $d->th_ajaran ?> </td>
            </tr>
        </table>
        </div>
      </section>
</body>
</html>