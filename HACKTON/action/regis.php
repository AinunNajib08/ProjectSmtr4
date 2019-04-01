<?php

include "koneksi.php";
if (isset($_POST['daftar'])) {
    $nama = $_POST['namalengkap'];
    $email = $_POST['email'];
    $pw = $_POST['password'];
    $no_hp = $_POST['no_hp'];
    $bank = $_POST['bank'];
    $data = "investor";

    $sql = "INSERT INTO datainvestor (id, nama_lengkap, email, password, no_hp, level, kode_bank) VALUES ('','$nama', '$email','$pw','$no_hp','$data','$bank')";
  
    }
    if (mysqli_query($koneksi, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }

    $login = mysqli_query($koneksi,"select id from datainvestor where datainvestor.email='$email' and datainvestor.password='$pw'");
    $data = mysqli_fetch_assoc($login);
    $id = $data['id'];

    mysqli_close($koneksi);
    header("location: ../data-bank.php?id=$id");
 
?>