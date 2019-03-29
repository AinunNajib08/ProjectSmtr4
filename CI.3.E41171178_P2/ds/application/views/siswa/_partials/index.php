<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-divider">
                        Menu
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="<?php echo base_url(); ?>" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa"></i>Dashboard <span class="badge badge-success">6</span></a>
                        <div id="submenu-1" class="collapse submenu" style="">
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active" href="<?php echo base_url(); ?>siswa" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa"></i>Data Siswa <span class="badge badge-success">6</span></a>
                        <div id="submenu-1" class="collapse submenu" style="">
                        </div>
                    </li>
                    <li class="nav-divider">
                        Features
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" aria-expanded="false" data-target="#submenu-6" aria-controls="submenu-6"><i class="fas fa-fw fa-file"></i> Pages </a>
                        <div id="submenu-6" class="collapse submenu" style="">
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>




<div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Data Tables</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tables</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- basic table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Basic Table</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th>NIS</th>
                                                <th>Nama</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Telp</th>
                                                <th>Alamat</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        if( ! empty($siswa)){ // Jika data siswa tidak sama dengan kosong, artinya jika data siswa ada
                                            foreach($siswa as $data){
                                              echo "<tr>
                                              <td>".$data->nis."</td>
                                              <td>".$data->nama."</td>
                                              <td>".$data->jenis_kelamin."</td>
                                              <td>".$data->telp."</td>
                                              <td>".$data->alamat."</td>
                                              <td><a href='".base_url("siswa/ubah/".$data->nis)."'>Ubah</a></td>
                                              <td><a href='".base_url("siswa/hapus/".$data->nis)."'>Hapus</a></td>
                                              </tr>";
                                            }
                                        }else{ // Jika data siswa kosong
                                            echo "<tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>";
                                        }
                                        ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>NIS</th>
                                                <th>Nama</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Telp</th>
                                                <th>Alamat</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                    <br>
                                    <a href="<?php echo base_url();?>siswa/tambah"><input type="submit" class="btn btn-space btn-primary" name="submit" value="Tambahkan"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end basic table  -->
                    <!-- ============================================================== -->
                </div>
                </div>
                </div>
            </div> 