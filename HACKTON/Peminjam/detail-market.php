<?php
include '../action/tukangshare.php';
include '../action/koneksi.php';
$id = $_GET['id'];
$namaadmin = $_SESSION['email'];
$login = mysqli_query($koneksi,"select id ,datainvestor.nama_lengkap, datainvestor.status from datainvestor where datainvestor.email='$namaadmin'");
$data = mysqli_fetch_assoc($login);
$nama = $data['nama_lengkap'];
$status = $data['status'];
$idskuy = $data['id'];
$result = mysqli_query($koneksi,"select idumkm,name,alamat_lengkap ,sektor, image, description, dana, keuntungan, jw, grade, tujuan  from umkm where idumkm='$id'");
$detail = mysqli_query($koneksi,"select idumkm,name,alamat_lengkap ,sektor, image, description, dana, keuntungan, jw, grade, tujuan, jp, angsuran, tanggal, perbulan, pekerjaan  from umkm where idumkm='$id'");
$detaildata = mysqli_fetch_assoc($detail);
$tujuan = $detaildata['tujuan'];
$jw = $detaildata['jw'];
$jp = $detaildata['jp'];
$tanggal = $detaildata['tanggal'];
$perbulan = $detaildata['perbulan'];
$pekerjaan = $detaildata['pekerjaan'];
$sektor = $detaildata['sektor'];
$lokasi = $detaildata['alamat_lengkap'];
$angsuran=number_format($detaildata['angsuran'],0,",",".");

      if (isset($_POST['danai'])) {
      header("location: ../login.php?pesan=gagal");
      }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin Free Bootstrap Admin Dashboard Template</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="index.html">
          <img src="images/logo.svg" alt="logo" />
        </a>
        <a class="navbar-brand brand-logo-mini" href="index.html">
          <img src="images/logo-mini.svg" alt="logo" />
        </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
          <li class="nav-item">
            <a href="#" class="nav-link">Schedule
              <span class="badge badge-primary ml-1">New</span>
            </a>
          </li>
          <li class="nav-item active">
            <a href="#" class="nav-link">
              <i class="mdi mdi-elevation-rise"></i>Reports</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="mdi mdi-bookmark-plus-outline"></i>Score</a>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <i class="mdi mdi-file-document-box"></i>
              <span class="count">7</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
              <div class="dropdown-item">
                <p class="mb-0 font-weight-normal float-left">You have 7 unread mails
                </p>
                <span class="badge badge-info badge-pill float-right">View all</span>
              </div>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="images/faces/face4.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium text-dark">David Grey
                    <span class="float-right font-weight-light small-text">1 Minutes ago</span>
                  </h6>
                  <p class="font-weight-light small-text">
                    The meeting is cancelled
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="images/faces/face2.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium text-dark">Tim Cook
                    <span class="float-right font-weight-light small-text">15 Minutes ago</span>
                  </h6>
                  <p class="font-weight-light small-text">
                    New product launch
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="images/faces/face3.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium text-dark"> Johnson
                    <span class="float-right font-weight-light small-text">18 Minutes ago</span>
                  </h6>
                  <p class="font-weight-light small-text">
                    Upcoming board meeting
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-bell"></i>
              <span class="count">4</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <a class="dropdown-item">
                <p class="mb-0 font-weight-normal float-left">You have 4 new notifications
                </p>
                <span class="badge badge-pill badge-warning float-right">View all</span>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="mdi mdi-alert-circle-outline mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium text-dark">Application Error</h6>
                  <p class="font-weight-light small-text">
                    Just now
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="mdi mdi-comment-text-outline mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium text-dark">Settings</h6>
                  <p class="font-weight-light small-text">
                    Private message
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="mdi mdi-email-outline mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium text-dark">New user registration</h6>
                  <p class="font-weight-light small-text">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown d-none d-xl-inline-block">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <span class="profile-text">Hello, <?php
                  echo $nama?> </span>
              <img class="img-xs rounded-circle" src="images/faces/face1.jpg" alt="Profile image">
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <a class="dropdown-item p-0">
                <div class="d-flex border-bottom">
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                    <i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i>
                  </div>
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
                    <i class="mdi mdi-account-outline mr-0 text-gray"></i>
                  </div>
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                    <i class="mdi mdi-alarm-check mr-0 text-gray"></i>
                  </div>
                </div>
              </a>
              <a class="dropdown-item mt-2">
                Manage Accounts
              </a>
              <a class="dropdown-item">
                Change Password
              </a>
              <a class="dropdown-item">
                Check Inbox
              </a>
              <a class="dropdown-item" href="../action/logout.php">
                Sign Out
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <img src="images/faces/face1.jpg" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">Richard V.Welsh</p>
                  <div>
                    <small class="designation text-muted">Manager</small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="marketplace.php">
              <i class="menu-icon mdi mdi-chart-line"></i>
              <span class="menu-title">Marketplace</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/forms/basic_elements.html">
              <i class="menu-icon mdi mdi-backup-restore"></i>
              <span class="menu-title">Form elements</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/charts/chartjs.html">
              <i class="menu-icon mdi mdi-chart-line"></i>
              <span class="menu-title">Charts</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table.html">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Tables</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/icons/font-awesome.html">
              <i class="menu-icon mdi mdi-sticker"></i>
              <span class="menu-title">Icons</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-restart"></i>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/login.html"> Login </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/register.html"> Register </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/error-404.html"> 404 </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/error-500.html"> 500 </a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
            <?php if($status=='unapproved'){ ?>
          <div class="row purchace-popup">
            <div class="col-12">
              <span class="d-block d-md-flex align-items-center">
                <p>Akun anda sedang ditinjau, silahkan tunggu dengan sabar</p>
              </span>
            </div>
          </div>
            <?php } else {

            } ?>
<!--            call-->

          <div class="row">
              <?php while($user_data = mysqli_fetch_array($result)) { ?>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body" >
                  <div class="clearfix">
                    <div class="float-center text-center" >
                      <img src="../img/i<?php echo $user_data['image']; ?>.jpg" width="70px" height="70px" class="rounded-circle" style="margin-bottom: 10px;" >
                      <p class="" style="margin-bottom: 1px;"></p>
                      <p class="" style="margin-bottom: 1px;"><?php echo $user_data['name']; ?></p>
                      <p class="" style="margin-bottom: 1px;"><?php echo $user_data['alamat_lengkap']; ?></p>
                      <p class="" ><?php echo $user_data['sektor']; ?></p>
                      <p class="text-left" style="margin-bottom: 1px;"><b>Description : </b><?php echo $user_data['description'];?>   </p>
                      <p class="text-left" style="margin-bottom: 1px;"><b>Dana : <?php $harga=number_format($user_data['dana'],0,",","."); echo "Rp. ".$harga?></b>  </p>
                      <p class="text-left" style="margin-bottom: 1px;"><b>Keuntungan : <?php $keuntungan=number_format($user_data['keuntungan'],0,",","."); echo "Rp. ".$keuntungan?> </b>  </p>
                      <p class="text-left" ><b>Jangka Waktu : <?php echo $user_data['jw']?> Minggu</b>  </p>
                    </div>
                      <a class="btn btn-primary" href="../action/danai.php?idumkm=<?php echo $id?>&id=<?php echo $idskuy?>">
                          Langsung Danai
                      </a>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> <?php echo $user_data['grade']?>% lower growth
                  </p>
                </div>
              </div>
            </div>
              <?php } ?>
              <div class="col-lg-9 grid-margin stretch-card">
                  <!--weather card-->
                  <div class="card" >
                  <div class="card-body">
                      <div class="row">
                          <div class="col-4 ">
                              <p class="text-left" style="margin-bottom: 1px; font-size: 15px;"><b>Dana </b></p>
                              <p class="text-left" style="margin-bottom: 80px; font-size: 15px;"><?php echo "Rp. ".$harga;?>   </p>
                              <p class="text-left" style="margin-bottom: 1px; font-size: 15px;"><b>Jangka Waktu </b></p>
                              <p class="text-left" style="margin-bottom: 80px; font-size: 15px;"><?php echo $jw." Minggu";?>   </p>
                              <p class="text-left" style="margin-bottom: 1px; font-size: 15px;"><b>Tanggal Bergabung </b></p>
                              <p class="text-left" style="margin-bottom: 80px; font-size: 15px;"><?php echo $tanggal;?>   </p>
                              <p class="text-left" style="margin-bottom: 1px; font-size: 15px;"><b>Lokasi</b>  </p>
                              <p class="text-left" style="margin-bottom: 80px; font-size: 15px;"><?php echo $lokasi;?>   </p>
                          </div>
                          <div class="col-4 ">
                              <p class="text-left" style="margin-bottom: 1px; font-size: 15px;"><b>Keuntungan </b></p>
                              <p class="text-left" style="margin-bottom: 80px; font-size: 15px;"><?php echo "Rp. ".$keuntungan;?>   </p>
                              <p class="text-left" style="margin-bottom: 1px; font-size: 15px;"><b>Jadwal Pencairan </b></p>
                              <p class="text-left" style="margin-bottom: 80px; font-size: 15px;"><?php echo $jp." Hari Lagi";?>   </p>
                              <p class="text-left" style="margin-bottom: 1px; font-size: 15px;"><b>Penghasilan Bulanan </b></p>
                              <p class="text-left" style="margin-bottom: 80px; font-size: 15px;"><?php echo "Rp. ".$perbulan;?>   </p>
                              <p class="text-left" style="margin-bottom: 1px; font-size: 15px;"><b>Sektor</b> </p>
                              <p class="text-left" style="margin-bottom: 80px; font-size: 15px;"><?php echo $sektor;?>   </p>
                          </div>
                          <div class="col-4 ">
                              <p class="text-left" style="margin-bottom: 1px; font-size: 15px;"><b>Tujuan </b></p>
                              <p class="text-left" style="margin-bottom: 80px; font-size: 15px;"><?php echo $tujuan;?>   </p>
                              <p class="text-left" style="margin-bottom: 1px; font-size: 15px;"><b>Angsuran Mingguan </b></p>
                              <p class="text-left" style="margin-bottom: 80px; font-size: 15px;"><?php echo "Rp. ".$angsuran;?>   </p>
                              <p class="text-left" style="margin-bottom: 1px; font-size: 15px;"><b>Pekerjaan </b></p>
                              <p class="text-left" style="margin-bottom: 80px; font-size: 15px;"><?php echo $pekerjaan;?>   </p>
                          </div>
                      </div>
                  </div>
                  </div>
              </div>
          </div>
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <!--weather card-->
                    <div class="card" >
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6 ">
                                    <p class="text-left" style="margin-bottom: 1px; font-size: 30px;"><b>Resiko Pendaan </b></p>
                                </div>
                                <div class="col-6 ">
                                    <p class="text-left" style="margin-bottom: 1px; font-size: 30px;"><b>Sejarah Pengembalian </b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
            <footer class="footer">
                <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
              <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with
              <i class="mdi mdi-heart text-danger"></i>
            </span>
                </div>
            </footer>
            <!-- partial -->
        </div>
          <!-- main-panel ends -->
      </div>
        <!-- page-body-wrapper ends -->
    </div>
      <!-- container-scroller -->

      <!-- plugins:js -->
      <script src="vendors/js/vendor.bundle.base.js"></script>
      <script src="vendors/js/vendor.bundle.addons.js"></script>
      <!-- endinject -->
      <!-- Plugin js for this page-->
      <!-- End plugin js for this page-->
      <!-- inject:js -->
      <script src="js/off-canvas.js"></script>
      <script src="js/misc.js"></script>
      <!-- endinject -->
      <!-- Custom js for this page-->
      <script src="js/dashboard.js"></script>
      <!-- End custom js for this page-->
</body>

</html>