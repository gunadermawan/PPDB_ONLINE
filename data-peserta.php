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
            <li> <a href="keluar.php">keluar</a></li>
           <li> <h3> Anda Login sebagai : <?php echo $_SESSION['nama']; ?></h3></li>
        </ul>
      </header>  
      <!-- bagian content beranda -->
      <section class="content">
          <h2>Data Peserta yang terdaftar</h2>
        <div class="box">   
            <a href="cetak-peserta.php" target="_blank" class="btn-cetak">Cetak</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Pendaftaran</th>
                        <th>nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $no = 1;
                        $list_peserta = mysqli_query($conn, "SELECT * FROM tb_pendaftaran");
                        while($row = mysqli_fetch_array($list_peserta)){  
                    ?>
                    <tr>
                        <td> <?php echo $no++; ?> </td>
                        <td><?php echo $row['id_pendaftaran'] ?></td>
                        <td><?php echo $row['nm_peserta'] ?></td>
                        <td><?php echo $row['jk'] ?></td>
                        <td>
                            <a href="detail-peserta.php?id=<?php echo $row['id_pendaftaran']?>">Detail</a> |
                            <a href="hapus-peserta.php?id=<?php echo $row['id_pendaftaran']?>"onclick="return confirm('Yakin hapus data ?') ">Hapus</a>
                        </td>
                    </tr>
                    <?php 
                        }
                    ?>
                </tbody>
            </table>
        </div>
      </section>
</body>
</html>