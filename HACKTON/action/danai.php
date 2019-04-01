<?php

include "koneksi.php";
    $id = $_GET['id'];
    $idskuy = $_GET['idumkm'];
    echo $idskuy;
    echo  $id;
    $update = "UPDATE umkm SET status='terdanai' WHERE idumkm='$idskuy'";
    mysqli_query($koneksi,$update);
    $sql = "INSERT INTO trans_data (id_trans,id, idumkm) VALUES ('','$id', '$idskuy')";
    if (mysqli_query($koneksi, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }
    header("location: ../peminjam/marketplace.php");


mysqli_close($koneksi);
 
?>