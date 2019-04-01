<?php

include "koneksi.php";
if (isset($_POST['daftar'])) {
    $id = $_GET['id'];
    $bank = $_POST['bank'];
    $cabang = $_POST['cabang'];
    $norek = $_POST['norek'];
    $pemrek = $_POST['pemrek'];


    $sql = "UPDATE datainvestor SET kode_bank = '$bank', cabang='$cabang', no_rekening ='$norek', pemilik='$pemrek'  WHERE id='$id'";
    mysqli_query($koneksi, $sql);
}





    mysqli_close($koneksi);
    header("location: ../data-ktp.php?id=$id");

 
?>