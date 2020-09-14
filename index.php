<?php 
    include "routes.php";
    if(isset($_POST['submit'])){
        //ambil 1 ID terbesar di kolom ID pendaftran,lalu ambil 5 karakter dari sblh kanan
        $getMaxId = mysqli_query($conn, "SELECT MAX(RIGHT(id_pendaftaran, 5)) AS id FROM tb_pendaftaran");
        $d = mysqli_fetch_object($getMaxId);    
        $generateId = 'P'.date('Y').sprintf("%05s",$d->id + 1);
        // proses query database
        $insert = mysqli_query($conn,"INSERT INTO tb_pendaftaran VALUES(
            '".$generateId."',
            '".date('Y-m-d')."',
            '".$_POST['th_ajaran']."',
            '".$_POST['jurusan']."',
            '".$_POST['nm']."',
            '".$_POST['tmp_lahir']."',
            '".$_POST['tgl_lahir']."',
            '".$_POST['jk']."',
            '".$_POST['agama']."',
            '".$_POST['alamat']."'
        )");
        if($insert){
            echo '<script> window.location="success.php?id='.$generateId.'" </script>';
        }else{
            echo 'huft'.mysqli_error();
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDB Online</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <!-- box formulir-->
        <section class="box-formulir">
            <h2>FORMULIR PENDAFTARAN SISWA ONLINE</h2>
    <!-- bagian form -->
            <form action="" method="post">
                <div class="box">
                    <table class="table-form">
                        <tr>
                            <td>Tahun Ajaran</td>
                            <td>:</td>
                            <td>
                                <input type="text" name="th_ajaran" id="" class="input-control" value="2020/2021" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>Jurusan</td>
                            <td>:</td>
                            <td>
                                <select name="jurusan" id="" class="input-control">
                                    <option value="" readonly>-- pilih ---</option>
                                    <option value="IPS">IPS</option>
                                    <option value="MIPA">MIPA </option>
                                    <option value="BAHASA">BAHASA </option>
                                </select>
                            </td>
                        </tr>
                    </table>
                </div>
                <h2>DATA DIRI CALON SISWA</h2>
                <div class="box">
                    <table class="table-form">
                        <tr>
                            <td>Nama Lengkap</td>
                            <td>:</td>
                            <td>
                                <input type="text" name="nm" id="" class="input-control">
                            </td>
                        </tr>
                        <tr>
                            <td>Tempat Lahir</td>
                            <td>:</td>
                            <td>
                                <input type="text" name="tmp_lahir" id="" class="input-control">
                            </td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td>:</td>
                            <td>
                                <input type="date" name="tgl_lahir" id="" class="input-control">
                            </td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td>
                                <input type="radio" name="jk" id="" class="input-control" value="Laki - Laki">Laki - Laki &nbsp;&nbsp;&nbsp;
                                <input type="radio" name="jk" id="" class="input-control" value="Perempuan">Perempuan 
                            
                            </td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td>:</td>
                            <td>
                                <select name="agama" id="" class="input-control">
                                    <option value="">-- pilih ---</option>
                                    <option value="ISLAM">ISLAM</option>
                                    <option value="KRISTEN">KRISTEN</option>
                                    <option value="KATOLIK">KATOLIK</option>
                                    <option value="HINDU">HINDU</option>
                                    <option value="BUDHA">BUDHA</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Alamat Lengkap</td>
                            <td>:</td>
                            <td>
                                <textarea name="alamat" id="" class="input-control"></textarea>    
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                                <input type="submit" value="DAFTAR SEKARANG"name="submit"class="btn-daftar">    
                            </td>
                        </tr>
                    </table>
                </div>
                    
            </form>
        </section>
</body>
</html>