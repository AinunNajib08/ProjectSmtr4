
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>A Shop</title>

    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url('admin/vendor/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('admin/vendor/fontawesome-free/css/all.min.css');?>" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="<?php echo base_url('admin/vendor/datatables/dataTables.bootstrap4.css');?>" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('admin/css/sb-admin.css');?>" rel="stylesheet">

  </head>
  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.html">A shop.com</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

      <!-- Navbar -->
      <ul>
        <li>
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">Settings</a>
            <a class="dropdown-item" href="#">Activity Log</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="login">Logout</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">
      <div class="container-fluid">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Produk</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Login Screens:</h6>
            <a class="dropdown-item" href="login.html">Login</a>
            <a class="dropdown-item" href="register.html">Register</a>
            <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Other Pages:</h6>
            <a class="dropdown-item" href="404.html">404 Page</a>
            <a class="dropdown-item" href="blank.html">Blank Page</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
        </li>
      </ul>

      <div id="content-wrapper">
        <form action="<?php echo site_url(). 'admin/produk/tambah'; ?>" method="post" enctype="multipart/form-data">
          <div class="produk-form col-md-8 mt-4 mb-4">
            <div class="input-group">
                <label style="margin-right: 70px; margin-top: 10px; font-family: Times New Roman; font-size: 13pt;">Nama Barang</label>
                <input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang" required autofocus="">
            </div>
            <br/>
            <div class="input-group">
                <label style="margin-right: 70px; margin-top: 10px; font-family: Times New Roman; font-size: 13pt;">Harga Barang</label>
                <input type="text" name="harga_barang" class="form-control" placeholder="Harga Barang" required autofocus="">
            </div>
            <br/>
            <div class="input-group">
                <label style="margin-right: 80px; margin-top: 10px; font-family: Times New Roman; font-size: 13pt;">Stok Barang</label>
                <input type="text" name="stok_barang" class="form-control" placeholder="Stok Barang" required autofocus="">
            </div>
            <br/>
             <div class="form-group col-md-12">
                <label style="margin-right: 45px; margin-top: 10px; font-family: Times New Roman; font-size: 13pt;">Deskripsi Barang</label>
                <textarea name="deskripsi_barang" class="form-control" style="height: 150px;" placeholder="Deskripsi Barang"> </textarea>
              </div>
              <div class="input-group col-md-8">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <label style="margin-right: 45px; margin-top: 5px; font-family: Times New Roman; font-size: 13pt;">Gambar Barang</label>
                <input type="file" name="gambar" required>
              </div>
              <br/>
              <button class="btn btn-primary mr-3 ml-3"  type="submit">Post kiriman</button>
          </div>
        </form>

        

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © A shop.com</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->
    

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('admin/vendor/jquery/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('admin/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('admin/vendor/jquery-easing/jquery.easing.min.js');?>"></script>

    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url('admin/vendor/chart.js/Chart.min.js');?>"></script>
    <script src="<?php echo base_url('admin/vendor/datatables/jquery.dataTables.js');?>"></script>
    <script src="<?php echo base_url('admin/vendor/datatables/dataTables.bootstrap4.js');?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('admin/js/sb-siswa.min.js');?>"></script>

    <!-- Demo scripts for this page-->
    <script src="<?php echo base_url('admin/js/demo/datatables-demo.js');?>"></script>
    <script src="<?php echo base_url('admin/js/demo/chart-area-demo.js');?>"></script>

  </body>

</html>
