<?php 
    include 'routes.php';
    $bukti_peserta = mysqli_query($conn, "SELECT * FROM tb_pendaftaran WHERE id_pendaftaran = '".$_GET['id']."'");
    $d = mysqli_fetch_object($bukti_peserta);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Bukti Pendaftaran</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <script>
        window.print();
    </script>
</head>
<body>

<section class="box-formulir">
    <div class="box">
        <h3>Bukti Pendaftaran peserta</h3>
        <table class="table-bukti">
            <tr>
                <td>Kode Pendaftaran</td>
                <td>:</td>
                <td> <?php echo $d->id_pendaftaran ?> </td>
            </tr>
            <tr>
                <td>Tanggal Pendaftaran</td>
                <td>:</td>
                <td> <?php echo $d->tgl_dafar?> </td>
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
            <h2>bawa bukti cetak ini ke bagian administrasi sekolah</h2>
            <?php echo "Dicetak " ?>
            <?php include 'get-time.php' ?>
        </table>
        
    </div>
</section>
</body>
</html>