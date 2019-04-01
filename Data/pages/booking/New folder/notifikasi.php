<?php
include '../../koneksi.php';

if (isset($_GET['id'])) {
// ambil nilai id dari url dan disimpan dalam variabel $id
    $id = ($_GET["id"]);
// menampilkan data mahasiswa dari database yang mempunyai id=$id
    $query = "SELECT listbooking.id_member,listbooking.id_tracking, listbooking.Nama, listbooking.no_hp, listbooking.alamat, listbooking.nopol, listbooking.id_jm, listbooking.id_model,jm.jenis_montor, Jm_model.model FROM listbooking,jm,jm_model WHERE listbooking.id_jm=jm.id_jm and listbooking.id_model=jm_model.id_model and id_member='$id' and listbooking.tanggal='$tanggal'";
    $result = mysqli_query($koneksi, $query);
// mengecek apakah query gagal
    if (!$result) {
        die ("Query Error: " . mysqli_errno($koneksi) .
            " - " . mysqli_error($koneksi));
    }
// mengambil data dari database dan membuat variabel" utk menampung data
// variabel ini nantinya akan ditampilkan pada form
    $data = mysqli_fetch_assoc($result);
    $id_member = $data["id_member"];
    $id_tracking = $data["id_tracking"];
    $nama = $data["Nama"];
    $no_hp = $data["no_hp"];
    $alamat = $data["alamat"];
    $nopol = $data["nopol"];
    $jm = $data["id_jm"];
    $jm_model = $data["id_model"];
    $jenis_m = $data["jenis_montor"];
    $model = $data["model"];

} else {
// apabila tidak ada data GET id pada akan di redirect ke index.php
    header("location:index.php");
}

$tanggal = date("Y-m-d");
$bl ='Belum Selesai';
$sqlCommand = "SELECT COUNT(id_booking) FROM listbooking WHERE listbooking.Status='$bl' and listbooking.tanggal='$tanggal' ";
$query = mysqli_query($koneksi, $sqlCommand) or die (mysqli_error());
$row = mysqli_fetch_row($query);
echo $row[0];

$tanggal = date("Y-m-d");
$sqlCommandl = "SELECT COUNT(id_booking) FROM listbooking WHERE listbooking.tanggal='$tanggal' ";
$queryi = mysqli_query($koneksi, $sqlCommandl) or die (mysqli_error());
$noantrian = mysqli_fetch_row($queryi);
echo $noantrian[0];

$teknisi = "Teknisi";
$adminn = "SELECT COUNT(id_admin) FROM dataadmin WHERE dataadmin.level ='$teknisi'";
$gamee = mysqli_query($koneksi, $adminn) or die (mysqli_error());
$you = mysqli_fetch_row($gamee);
echo $you[0];
$berapa = $row[0] / $you[0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Bengkel Sukses</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="../../css/Booking/img/favicon.png" rel="icon">
    <link href="../../css/Booking/img/icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800"
          rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="../../css/Booking/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="../../css/Booking/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../../css/Booking/lib/animate/animate.min.css" rel="stylesheet">
    <link href="../../css/Booking/lib/venobox/venobox.css" rel="stylesheet">
    <link href="../../css/Booking/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="../../css/Booking/css/stylebooking.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fredoka+One">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed">
    <link rel="stylesheet" href="../../css/Booking/css/Navigation-Clean.css">
    <link rel="stylesheet" href="../../css/Booking/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="../../css/Booking/css/Video-Parallax-Background-v2.css">

</head>

<body>
<?php
$sql = "select * from jm";
$result = mysqli_query($koneksi, $sql);

$sql_kabupaten = "select * from jm_model";
$result_kabupaten = mysqli_query($koneksi, $sql_kabupaten);
?>

<!--==========================
  Header
  ============================-->
<header id="header">
    <div class="container">

        <div id="logo" class="pull-left">
            <a href="#" class="scrollto"><img src="../../css/Booking/img/logo.png" alt="" title=""
                                              style="width: 110px;"></a>
        </div>


        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li
                "><a href="../../index.php">Home</a></li>
                <li class="menu-has-children" class="menu-active"><a href="#">Service</a>
                    <ul>
                        <li><a href="bookingservice.php">Booking Service</a></li>
                        <li><a href="tracking.php">Tracking</a></li>
                        <li><a href="#">Perawatan</a></li>
                    </ul>
                </li>
                <li><a href="#speakers">Tentang</a></li>
                <li><a href="#hotels">Fasilitas</a></li>
                <li><a href="#gallery">Galery</a></li>
                <li><a href="#contact">Hubungi Kami</a></li>
                <li class="buy-tickets"><a href="#buy-tickets">Log In</a></li>
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->

<!--==========================
  Intro Section
  ============================-->
<!--Input Data Booking-->

<section id="introv2">
    <div class="container" style="margin-top: 150px; margin-bottom: 50px; margin-right: -150px;">
        <form class="form-horizontal" action="bookingservice.php" method="post">
            <div class="form-group" >
                <div class="row">
                    <div class="col-md-12"  >
                        <div class="form-group">
                            <div class="row">
<center>
                                <label class="control-label col-md-10" style="font-size: 20px; ">Makasih, <strong><?php echo $nama ?></strong> Sudah
                                    Melakukan Pemesanan</label>
                                <label class="control-label col-md-10 text-left" for="Nama" style="font-size: 20px; ">Data Kamu</label>

                                <div class="col-md-10" style="font-size: 20px;">
                                    <div class="alert alert-success" role="alert">
                                    <div class="text-left" style="margin-bottom: 10px">
                                        <?php echo "ID Member Kamu &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : ".$id_member ?>
                                        <br>
                                        <?php echo "Kode Tracking  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : ".$id_tracking ?>
                                        <br>
                                        <?php echo "Atas Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : ".$nama ?>
                                        <br>
                                        <?php echo "Nomor Polisi &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : ".$nopol ?>
                                        <br>
                                        <?php echo "Jenis Montor &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : ".$jenis_m ?>
                                        <br>
                                        <?php echo "Model Montor &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : ".$model ?>
                                        <br>
                                    <?php echo "Kamu Antrian Nomor &nbsp;&nbsp;&nbsp;: ".$noantrian[0];?>
                                    <br>
                                        <strong>
                                    <?php
                                    if ($berapa < 1) {
                                        echo "Silahkan datang sekarang juga,";
                                    } else if ($berapa < 2) {
                                        echo "Silahkan datang 30 Menit lagi";
                                    } else if ($berapa < 3 ) {
                                        echo "Silahkan datang 1 Jam lagi";
                                    } else if ($berapa < 4 ) {
                                        echo "Silahkan datang 1 Jam 30 Menit lagi";
                                    } else if ($berapa < 6 ) {
                                        echo "Silahkan datang 2 Jam lagi";
                                    } else if ($berapa < 7 ) {
                                        echo "Silahkan datang 2 Jam 30 Menit lagi";
                                    } else if ($berapa < 8 ) {
                                        echo "Silahkan datang 2 Jam 30 Menit lagi";
                                    } else if ($berapa < 9 ) {
                                        echo "Silahkan datang 2 Jam 30 Menit lagi";
                                    } else if ($berapa < 10 ) {
                                        echo "Silahkan datang 2 Jam 30 Menit lagi";
                                    } else if ($berapa < 11 ) {
                                        echo "Silahkan datang 2 Jam 30 Menit lagi";
                                    }

                                    mysqli_query($koneksi, "UPDATE listbooking SET listbooking.no_antrian='$noantrian[0]' where listbooking.id_tracking='$id_tracking_tracking'");


                                    ?>
                                        </strong>

                                    </div>
                                        <button type="submit" class="btn btn-primary">OKE</button>
                                    </div>



                                </div>
</center>

                            </div>
                        </div>
                    </div>

        </form>

    </div>
</section>


<!--deskripsi booking-->


<!--==========================
  Footer
  ============================-->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-info">
                    <img src="../../css/Booking/img/logo.png" alt="TheEvenet">
                    <p>In alias aperiam. Placeat tempore facere. Officiis voluptate ipsam vel eveniet est dolor et totam
                        porro. Perspiciatis ad omnis fugit molestiae recusandae possimus. Aut consectetur id quis. In
                        inventore consequatur ad voluptate cupiditate debitis accusamus repellat cumque.</p>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
                        <li><i class="fa fa-angle-right"></i> <a href="#">About us</a></li>
                        <li><i class="fa fa-angle-right"></i> <a href="#">Services</a></li>
                        <li><i class="fa fa-angle-right"></i> <a href="#">Terms of service</a></li>
                        <li><i class="fa fa-angle-right"></i> <a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
                        <li><i class="fa fa-angle-right"></i> <a href="#">About us</a></li>
                        <li><i class="fa fa-angle-right"></i> <a href="#">Services</a></li>
                        <li><i class="fa fa-angle-right"></i> <a href="#">Terms of service</a></li>
                        <li><i class="fa fa-angle-right"></i> <a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h4>Hubungi Kami</h4>
                    <p>
                        Jl. Kartini No.33, Timuran Jawa Tengah <br>
                        Banjarsari 57131<br>
                        Kota Surakarta Jawa Tengah<br>
                        <strong>Phone:</strong> +1 5589 55488 55<br>
                        <strong>Email:</strong> info@example.com<br>
                    </p>

                    <div class="social-links">
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong>TheEvent</strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=TheEvent
          -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
</footer><!-- #footer -->

<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

<!-- JavaScript Libraries -->
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/jquery/jquery-migrate.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/superfish/hoverIntent.js"></script>
<script src="lib/superfish/superfish.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/venobox/venobox.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Contact Form JavaScript File -->
<script src="contactform/contactform.js"></script>

<!-- Template Main Javascript File -->
<script src="js/main.js"></script>
<script src="js/jquery-1.11.2.min.js"></script>
<!-- js untuk bootstrap -->
<script src="js/bootstrap.js"></script>

</body>

</html>

