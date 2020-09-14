<?php 
    include 'routes.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Peserta PSB</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <script>
        window.print();
    </script>
</head>
<body>

<section class="box-formulir">
    <div class="box">
        <h3>  Pendaftar PSB Tahun Ajaran 2020/2021</h3>
        <table class="table"border ="1" >
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Pendaftaran</th>
                        <th>Tanggal Pendaftaran</th>
                        <th>Nama</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Jurusan Peminatan</th>
                    </tr>
                </thead><hr>
                <tbody>
                    <?php 
                        $no = 1;
                        $list_peserta = mysqli_query($conn, "SELECT * FROM tb_pendaftaran");
                        while($row = mysqli_fetch_array($list_peserta)){  
                    ?>
                    <tr>
                        <td> <?php echo $no++; ?> </td>
                        <td><?php echo $row['id_pendaftaran'] ?></td>
                        <td><?php echo $row['tgl_dafar'] ?></td>   
                        <td><?php echo $row['nm_peserta'] ?></td>
                        <td><?php echo $row['tgl_lahir'] ?></td>
                        <td><?php echo $row['jk'] ?></td>
                        <td><?php echo $row['almt_peserta'] ?></td>
                        <td><?php echo $row['jurusan'] ?></td>
                    </tr>
                    <?php 
                        }
                    ?>
                </tbody>
                <?php echo "Dicetak " ?>
                <?php include 'get-time.php' ?>
            </table>
        
    </div>
</section>
</body>
</html>