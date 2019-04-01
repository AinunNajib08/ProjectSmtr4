<?php

include "koneksi.php";
if (isset($_POST['daftar'])) {
    $id = $_GET['id'];
    $pemrek = $_POST['pemrek'];


    $sql = "UPDATE datainvestor SET ktp='$pemrek' WHERE id='$id'";
    mysqli_query($koneksi, $sql);
}





mysqli_close($koneksi);
header("location: ../data-npwp.php?id=$id");


?>