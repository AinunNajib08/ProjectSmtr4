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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

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

<!--==========================
  Header
  ============================-->
<header id="header">
    <div class="container">

        <div id="logo" class="pull-left">
            <!-- Uncomment below if you prefer to use a text logo -->
            <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
            <a href="#" class="scrollto"><img src="../../css/Booking/img/logo.png" alt="" title="" style="width: 110px;"></a>
        </div>


        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li "><a href="../../index.php">Home</a></li>
                <li class="menu-has-children" class="menu-active"><a href="#">Service</a>
                    <ul>
                        <li><a href="bookingservice.php">Booking Service</a></li>
                        <li><a href="../tracking/">Tracking</a></li>
                        <li><a href="#">Perawatan</a></li>
                    </ul>
                </li>
                <li><a href="../../index.php#speakers">Tentang</a></li>
                <li><a href="../../index.php#hotels">Fasilitas</a></li>
                <li><a href="../../index.php#gallery">Galery</a></li>
                <li><a href="../../index.php#contact">Hubungi Kami</a></li>
                <li class="buy-tickets"><a href="#buy-tickets">Log In</a></li>
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->

<!--==========================
  Intro Section
  ============================-->
<!--Input Data Booking-->

<section id="" >
    <div class="container" style="margin-top: 100px; margin-left: 100px;">
        <?php
        include"../../koneksi.php";
        $conn = mysqli_connect("localhost","root","","web");


        $sql = "select * from jm";
        $result = mysqli_query($conn,$sql);

        $sql_kabupaten = "select * from jm_model";
        $result_kabupaten = mysqli_query($conn,$sql_kabupaten);
        ?>
        <form class="form-horizontal" action="../../kontrol/cekid.php" method="post">
            <div class="form-group" ">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="row">
                            <label class="control-label col-md-12" style="font-size: 30px;">Booking Now</label>
                            <label class="control-label col-md-12" for="Nama">Masukan ID</label>
                            <div class="col-md-9">

                                <input name="id_member" type="text" class="form-control" id="Nama" placeholder="Masukan Nama">
                                <?php
                                if (isset($_GET['id'])) {
                                    $id = ($_GET["id"]);
                                    date_default_timezone_set('Asia/Jakarta');
                                    $tanggal = date("Y-m-d");
                                    $query = "SELECT listbooking.id_member FROM listbooking WHERE id_member='$id' tanggal='$tanggal'";
                                    $result = mysqli_query($koneksi, $query);
                                    if (!$result) {
                                        die ("Query Error: " . mysqli_errno($koneksi) .
                                            " - " . mysqli_error($koneksi));
                                    }

                                    $data = mysqli_fetch_assoc($result);
                                    /*if ($data['id_member'] != "$id") {
                                        echo "<script>alert('Maaf ID Member Tidak Terdaftar');document.location.href='bookingservice.php'</script>";


                                    }*/
                                }
                                ?>
                            </div>
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-default" name="inputdata">Cek ID</button>
                            </div>
                        </div>
                    </div>
                </div>

        </form>
        <form class="form-horizontal" action="input.php" method="post">
            <div class="form-group" ">
            <div class="row">
                <div class="col-md-6">

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Nama">Nama:</label>
                        <div class="col-md-12">
                            <input name="nama" type="text" class="form-control" id="Nama" placeholder="Masukan Nama" required oninvalid="this.setCustomValidity('Masukan Nama Kamu')" oninput="setCustomValidity('')">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="nohp" >No.HP:</label>
                        <div class="col-sm-12">
                            <input name="nohp" type="text" class="form-control" id="nohp" placeholder="Masukan No.HP" required oninvalid="this.setCustomValidity('Masukan No HP Kamu')" oninput="setCustomValidity('')" onkeypress="return hanyaAngka(event)" maxlength="13">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="nohp">Alamat:</label>
                        <div class="col-sm-12">
                            <input name="alamat" type="text" class="form-control" id="nohp" placeholder="Masukan Alamat" required oninvalid="this.setCustomValidity('Masukan Alamat Kamu')" oninput="setCustomValidity('')">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="nohp">No. Polisi:</label>
                        <label class="control-label col-sm-7" for="nohp" style="font-size: 13px">Contoh : P 2309 WR</label>
                        <div class="col-sm-12">
                            <input name="nopol" type="text" class="form-control" id="nohp" placeholder="Masukan No. Polisi" required oninvalid="this.setCustomValidity('Masukan Nomor Polisi Kamu')" oninput="setCustomValidity('')">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="control-label col-sm-10">Jenis Montor :</label>
                                <div class="col-md-12">
                                    <select name="jenis_montor" id="combo_provinsi" class="form-control" required oninvalid="this.setCustomValidity('Silahkan Pilih')" oninput="setCustomValidity('')">
                                        <option value="">--Jenis Montor--</option>
                                        <?php
                                        while($row=mysqli_fetch_assoc($result)){
                                            echo'<option value="'.$row['id_jm'].'">'.$row['jenis_montor'].'</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">

                                <label class="control-label col-sm-10">Model :</label>
                                <div class="col-md-12">
                                    <select name="model" id="combo_kabupaten" class="form-control " required oninvalid="this.setCustomValidity('Silahkan Pilih')" oninput="setCustomValidity('')">
                                        <option value="">--Pilih Model--</option>
                                        <?php
                                        while($row=mysqli_fetch_assoc($result_kabupaten)){
                                            echo'<option class="dt '.$row['id_jm'].'" value="'.$row['id_model'].'">'.$row['model'].'</option>';
                                        }
                                        ?>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-10">Perbaikan :</label>
                        <div class="row" >
                            <div class="col-md-6">
                                <div class="col-md-12" style="margin-bottom: 0px;" >
                                    <input type="checkbox" name="Perbaikan[]" value="Pembersihan karburator"> Pembersihan karburator<br>
                                    <input type="checkbox" name="Perbaikan[]" value="Penyetelan karburator"> Penyetelan karburator<br>
                                    <input type="checkbox" name="Perbaikan[]" value="Pembersihan saringan udara"> Pembersihan saringan udara<br>
                                    <input type="checkbox" name="Perbaikan[]" value="Pemeriksaan dan penggantian oli"> Pemeriksaan dan penggantian oli<br>
                                    <input type="checkbox" name="Perbaikan[]" value="Penyetelan dan pelumasan kabel gas"> Penyetelan dan pelumasan kabel gas<br><br>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-12">
                                    <input type="checkbox" name="Perbaikan[]" value="Penyetelan dan pelumasan rantai roda"> Penyetelan dan pelumasan rantai roda<br>
                                    <input type="checkbox" name="Perbaikan[]" value="Penyetelan rem depan dan belakang"> Penyetelan rem depan dan belakang<br>
                                    <input type="checkbox" name="Perbaikan[]" value="Pemeriksaan dan penambahan air aki"> Pemeriksaan dan penambahan air aki<br>
                                    <input type="checkbox" name="Perbaikan[]" value="Pemeriksaan lampu dan klakson"> Pemeriksaan lampu dan klakson<br>
                                    <input type="checkbox" name="Perbaikan[]" value="Penyetelan kopling"> Penyetelan kopling<br><br>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <input type="text" name="lainnya" class="form-control" placeholder="Perbaikan Lainnya">
                        </div>
                    </div>
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default" name="inputdata">Submit</button>
                    </div>
                </div>


                <!-- Tutup Input Data Booking-->
                <!--deskripsi booking-->
                <div class="col-md-6" style="background: #80808080; left: 0px; margin-right: 0px;">
                    <h1 class="text-center" style="font-family cursive;margin:0px;color:rgb(225,11,11);font-size:49px;">Booking <span style="color: #ff0000"><span><span style="color: rgb(0,0,0)"> Service</h1>
                    <div class="row no-gutters">
                        <div class="col-md-6 venue-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16261133.722345112!2d101.47527059651857!3d-5.921867140161616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1f7998f910e0e5db!2sBengkel+Sukses!5e0!3m2!1sid!2sid!4v1542260650297" frameborder="0" style="border:0" width="500px" height="500px" allowfullscreen></iframe>
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
                    <p>In alias aperiam. Placeat tempore facere. Officiis voluptate ipsam vel eveniet est dolor et totam porro. Perspiciatis ad omnis fugit molestiae recusandae possimus. Aut consectetur id quis. In inventore consequatur ad voluptate cupiditate debitis accusamus repellat cumque.</p>
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
<script src="../../js/main.js"></script>
<script src="../../js/jquery-1.11.2.min.js"></script>
<!-- js untuk bootstrap -->
<script src="../../js/bootstrap.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        var combo_kabupaten = $("#combo_kabupaten");

        temp = combo_kabupaten.children(".dt").clone();
        $("#combo_provinsi").change(function(){
            var value = $(this).val();
            combo_kabupaten.children(".dt").remove();
            if(value!==''){
                temp.clone().filter("."+value).appendTo(combo_kabupaten);
            } else {
                temp.clone().appendTo(combo_kabupaten);
            }
        });
    });
</script>
<script>
    function hanyaAngka(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))

            return false;
        return true;
    }
</script>
</body>

</html>
