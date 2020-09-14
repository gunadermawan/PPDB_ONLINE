<?php 
    $tgl = mktime(date("m"),date("d"),date("Y"));
    echo "Tanggal : <b> ".date("d-M-Y",$tgl)." </b> ";
    date_default_timezone_set('Asia/Jakarta');
    $jam = date("H:i:s");
    echo "pukul : <b> ".$jam." </b>"
?>