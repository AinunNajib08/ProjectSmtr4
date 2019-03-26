<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registrasi Admin</title>

    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url('admin/vendor/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('admin/vendor/fontawesome-free/css/all.min.css');?>" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('admin/css/sb-admin.css');?>" rel="stylesheet">

  </head>

  <body class="bg-primary">


    <div class="container"> 
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Registrasi Admin</div>
        <div class="card-body">
          <form action="<?php base_url('index.php/admin/register/tambahkan') ?>" method="post" enctype="multipart/form-data" >
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="inputUsername" class="form-control" placeholder="Useraname" required="required" autofocus="autofocus"
                name="username">
                <label for="inputUsername">Username</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="required"
                name="password">
                <label for="inputPassword">Password</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="inputNama" class="form-control" placeholder="Nama" required="required" autofocus="autofocus"
                name="nama_lengkap">
                <label for="inputNama">Nama Lengkap</label>
                </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="inputTL" class="form-control" placeholder="Tempat Lahir" required="required"
                name="tempat_lahir">
                <label for="inputTL">Tempat lahir</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="date" id="inputTanggatLahir" class="form-control" placeholder="Tanggal Lahir" required="required"
                name="tanggal_lahir">
                <label for="Tanggal">Tanggal Lahir</label>
            </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="inputAlamat" class="form-control" placeholder="Alamat" required="required"
                name="alamat">
                <label for="inputAlamat">Alamat</label>
              </div>
            </div> 
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="required" autofocus="autofocus"
                name="email">
                <label for="inputEmail">Email</label>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me">
                  Remember Password
                </label>
              </div>
            </div>
            <a class="btn btn-primary btn-block" name="button" id="button" type="button" value="save" href="">Register</a>
          </form>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('admin/vendor/jquery/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('admin/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('admin/vendor/jquery-easing/jquery.easing.min.js');?>"></script>

  </body>

</html>
