<?php 
    include 'routes.php';
    if(isset($_GET['id'])){
        $delete = mysqli_query($conn, "DELETE FROM tb_pendaftaran WHERE id_pendaftaran = '".$_GET['id']."' ");
        echo '<script>window.location="data-peserta.php"</script>';
    }
    if($_SESSION['stat_login'] != true){
        echo ' <script> alert("Silahkan login terlebih dahulu!!!" )</script>';
        echo '<script> window.location="login.php" </script>';
    }
?>