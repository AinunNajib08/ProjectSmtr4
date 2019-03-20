<?php

include "koneksi.php";
if (isset($_POST['daftar'])) {
    $nama = $_POST['namalengkap'];
    $email = $_POST['email'];
    $pw = $_POST['password'];
    $no_hp = $_POST['no_hp'];
    $data = "investor";

    $sql = "INSERT INTO datainvestor (id, nama_lengkap, email, password, no_hp, level) VALUES ('','$nama', '$email','$pw','$no_hp','$data')";
  
    }
    if (mysqli_query($koneksi, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }

    mysqli_close($koneksi);
    header("location: ../data-bank.php");
 
?>