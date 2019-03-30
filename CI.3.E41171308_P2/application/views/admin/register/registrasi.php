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
          <form action="<?php echo site_url(). 'admin/register/tambahkan'; ?>" method="post" enctype="multipart/form-data" >
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="inputUsername" class="form-control" placeholder="Useraname" value="<?php echo set_value('username'); ?>" required="required" autofocus="autofocus"
                name="username">
                <label for="inputUsername">Username</label>
                <?php echo form_error('username'); ?>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" value="<?php echo set_value('password'); ?>"  required="required"
                name="password">
                <label for="inputPassword">Password</label>
                <?php echo form_error('password'); ?>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="inputNama" class="form-control" placeholder="Nama" value="<?php echo set_value('nama_lengkap'); ?>" required="required" autofocus="autofocus"
                name="nama_lengkap">
                <label for="inputNama">Nama Lengkap</label>
                <?php echo form_error('nama_lengkap'); ?>
                </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="inputTL" class="form-control" placeholder="Tempat Lahir" value="<?php echo set_value('tempat_lahir'); ?>" required="required"
                name="tempat_lahir">
                <label for="inputTL">Tempat lahir</label>
                <?php echo form_error('tempat_lahir'); ?>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="date" id="inputTanggatLahir" class="form-control" placeholder="Tanggal Lahir" value="<?php echo set_value('tanggal_lahir'); ?>" required="required"
                name="tanggal_lahir">
                <label for="Tanggal">Tanggal Lahir</label>
                <?php echo form_error('tanggal_lahir'); ?>
            </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="inputAlamat" class="form-control" placeholder="Alamat" value="<?php echo set_value('alamat'); ?>" required="required"
                name="alamat">
                <label for="inputAlamat">Alamat</label>
                <?php echo form_error('alamat'); ?>
              </div>
            </div> 
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" value="<?php echo set_value('email'); ?>" required="required" autofocus="autofocus"
                name="email">
                <label for="inputEmail">Email</label>
                <?php echo form_error('email'); ?>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Registrasi</button>
          </form>
        </div>
      </div>
    </div>

    <style type="text/css">
    body {
      width: auto;
      height: auto;
      background-image: url('bg.jpg');
    }

    </style>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('admin/vendor/jquery/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('admin/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('admin/vendor/jquery-easing/jquery.easing.min.js');?>"></script>

  </body>

</html>
