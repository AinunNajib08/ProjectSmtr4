<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="CodePixar">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>MUDI</title>

    <!--
		CSS
		============================================= -->
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/nouislider.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>

    <!-- Start Header Area -->
    <header class="header_area sticky-header">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light main_box">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.php"><img src="img/icon.jpg" style="width:170px" alt=""></a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto nav-pills">
                            <li class="nav-item "><a class="nav-link" href="index.php">Home</a></li>
                            <li class="nav-item "><a class="nav-link" href="umkm.php">UMKM</a></li>
                            <li class="nav-item "><a class="nav-link" href="investor.php">Investor</a></li>
                            <li class="nav-item "><a class="nav-link" href="cara_kerja.php">Cara Kerja</a></li>
                            <li class="nav-item "><a class="nav-link" href="tentang_kami.php">Tentang Kami</a></li>
                            <li class="nav-item active"><a class="nav-link font-weight-bold" href="login.php"> Login </a>
                            </li>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- End Header Area -->

    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Login</h1>
                    <nav class="d-flex align-items-center">

                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Login Box Area =================-->
    <section class="login_box_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login_box_img">
                        <img class="img-fluid" src="img/login.jpg" alt="">
                        <div class="hover">
                            <h4>Belum Punya Akun?</h4>
                            <a class="primary-btn" href="registrasi.php">Registrasi Investor</a><br>
                            <a class="primary-btn" href="registrasi_umkm.php">Registrasi UMKM</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login_form_inner">
                        <h3>Log in to enter</h3>
                        <form class="row login_form" action="action/login.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
                            </div>
                            <div class="col-md-12 form-group">
                                <p class="text-left"><?php 
                                                        if (isset($_GET['pesan'])) {
                                                            if ($_GET['pesan'] == "gagal") {
                                                                echo "Login gagal!";
                                                            } else if ($_GET['pesan'] == "logout") {
                                                                echo "Logout Berhasil";
                                                            } else if ($_GET['pesan'] == "belum_login") {
                                                                echo "Silahkan login";
                                                            }
                                                        }
                                                        ?></p>
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="creat_account">
                                    <input type="checkbox" id="f-option2" name="selector">
                                    <label for="f-option2">Keep me logged in</label>
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <button type="submit" value="submit" class="primary-btn">Log In</button>
                                <a href="#">Forgot Password?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Login Box Area =================-->

    <!-- start footer Area -->
    <footer class="bg-dark  mt-5 pt-3 pb-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="text-white">Tentang Kami</h1>
                    <a class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ratione eaque
                        labore
                        totam. Optio facilis accusamus adipisci cupiditate molestiae, cumque dolore assumenda natus
                        dicta alias, provident nostrum dolor omnis ipsam.</a>
                </div>
                <div class="col-md-2 text-white">
                    <h1 class="text-white">MUDI</h1>
                    <a>Jl. Merpati, Jember</a><br>
                    <a>085230737515</a><br>
                    <a>support.mudi@gmail.com</a>
                </div>
                <div class="col-md-4 text-white">
                    <h3 class="text-white">Bekerja Sama dengan:</h3>
                    <div class="text-center">
                        <img src="img/1.png" alt="" style="width :120pt">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-center mt-3">
                    <a class="text-white">Copyright 2019 </a>
                </div>
            </div>

    </footer>
    <!-- End footer Area -->


    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/nouislider.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="js/gmaps.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html> 