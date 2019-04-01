<?php

include "koneksi.php";
if (isset($_POST['daftar'])) {
    $nama = $_POST['namalengkap'];
    $alamat_lengkap = $_POST['alamat_lengkap'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $password = $_POST['password'];
    $data= $_POST['UMKM'];
    
   
    $data = "UMKM";

    $sql = "INSERT INTO dataUMKM (id, nama_lengkap, alamat_lengkap, email, no_hp, password,level ) VALUES ('','$nama', '$alamat_lengkap','','$email','$no_hp','$password','$data')";
  
    }
    if (mysqli_query($koneksi, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }

    $login = mysqli_query($koneksi,"select id from dataUMKM where dataUMKM.email='$email' and dataUMKM.password='$password'");
    $data = mysqli_fetch_assoc($login);
    $ID = $data['id'];

    mysqli_close($koneksi);
    header("location: ../data-bank.php?id=$id");
 
?>