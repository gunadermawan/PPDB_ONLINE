<?php 
    include 'routes.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PENDAFTARAN BERHASIL!</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
</head>
<body>
        <!-- box formulir-->
        <section class="box-formulir">
            <h2>SELAMAT,PENDAFTARAN ONLINE SISWA BERHASIL</h2>
            <div class="box">
                <h4>KODE PENDAFTARAN ANDA ADALAH <?php echo $_GET['id'] ?></h4>
                <h3>Sekarang silahkan cetak bukti Pendaftaran anda di tautan dibawah ini</h3>
                <a href="cetak-bukti.php?id=<?php echo $_GET['id'] ?>" class="btn-cetak" target="_blank">Cetak bukti Pendaftaran</a>&nbsp;&nbsp;&nbsp;
                <a href="index.php" class="btn-back">Kembali ke laman utama</a>
            </div>
        </section>
</body>
</html>