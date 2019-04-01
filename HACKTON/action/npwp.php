<?php

include "koneksi.php";
if (isset($_POST['daftar'])) {
    $id = $_GET['id'];
    $pemrek = $_POST['pemrek'];


    $sql = "UPDATE datainvestor SET npwp='$pemrek' WHERE id='$id'";
    mysqli_query($koneksi, $sql);
}





mysqli_close($koneksi);
header("location: ../login.php");


?>