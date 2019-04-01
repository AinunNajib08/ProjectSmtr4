<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$email = $_POST['email'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi, "SELECT * from datainvestor where email='$email' and password='$password'");
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if ($cek > 0) {

    $data = mysqli_fetch_assoc($login);

    // cek jika user login sebagai siswa
    if ($data['level'] == "Admin") {

        // buat session login dan username
        $_SESSION['email'] = $username;
        $_SESSION['level'] = "Admin";
        header("location:../pages/siswa/pages/");
    } else if ($data['level'] == "investor") {
        // buat session login dan username
        $_SESSION['email'] = $email;
        $_SESSION['level'] = "investor";
        // alihkan ke halaman dashboard pegawai
        header("location:../peminjam");
    } else if ($data['level'] == "Customer") {
        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "Customer";
        // alihkan ke halaman dashboard pengurus
        header("location:halaman_pengurus.php");

    }else{

        // alihkan ke halaman login kembali
        header("location:../login.php?pesan=belum_login");
    }
}else{
    header("location: ../login.php?pesan=gagal");
}

?>