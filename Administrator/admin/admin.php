<?php

  require_once '../../core/init.php';

  if (!Session::exists('username')) {
    header('location: login.php');
  }

  $Lib = new database();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Halaman Administrator</title>
        <meta http-equiv="Content-Type" content="width=device-width initial-scale=1.0"/>

        <link rel="stylesheet" href="../../lib/css/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../lib/css/css/style.css">
        <link rel="stylesheet" href="style.css">

        <link href="../../lib/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="../../lib/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
        <link href="../../lib/dist/css/sb-admin-2.css" rel="stylesheet">
        <link href="../../lib/vendor/morrisjs/morris.css" rel="stylesheet">

        <script src="../../lib/css/js/jquery.min.js"></script>
        <script src="../../lib/css/Highcharts/code/highcharts.js"></script>
        <script src="../../lib//css/js/style.js"></script>

    </head>

  <body>

<!--grafik akan ditampilkan disini -->

    <div class="container-fluid bg-admin">

        <div class="row">

          <!-- Sidebar -->

            <div class="col-sm-2">

                <div class="row">

                        <?php require_once '../../template/side-adm.php'; ?>

                </div> <!-- End Row -->

            </div><!-- End Col-sm-2 -->

            <div class="col-sm-10 bg-cont">

            <!-- Header -->

                <div class="row">

                    <nav class="navbar navbar-default">

                      <div class="container-fluid">

                          <div class="navbar-header">
                              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                              </button>
                              <a class="navbar-brand" href="../../home.php">Beritahukan.Com</a>
                          </div>

                          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                              <form class="navbar-form navbar-left" role="search">
                                <div class="input-group custom-search-form">
                                  <input type="text" class="form-control" placeholder="Search...">
                                  <span class="input-group-btn">
                                      <button class="btn btn-default" type="button">
                                          <i class="fa fa-search"></i>
                                      </button>
                                  </span>
                                </div>
                              </form>

                               <ul class="nav navbar-top-links navbar-right">
                                <li class="dropdown">
                                  <a href="#" class="fa dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin <span class="glyphicon glyphicon-list"></span></a>
                                  <ul class="dropdown-menu">
                                    <li><a href="#"><i class="fa fa-paper-plane fa-fw"></i> Lihat Website</a></li>
                                    <li><a href="#"><i class="fa fa-user fa-fw"></i> Profile</a></li>
                                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Setting</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                                   </ul>
                                </li>
                              </ul>



                              <!-- /.navbar-top-links -->

                          </div><!-- /.navbar-collapse -->

                      </div><!-- /.container-fluid -->

                    </nav>

                </div>


            <!-- Content Main -->

                  <div class="content">

                    <div class="col-lg-3 col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-pencil fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge"><?php echo $tadmin->getrow('users'); ?></div>
                                            <div>Total User!</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="tabel-user.php">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                            <div class="panel panel-green">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-users fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge"><?php echo $tadmin->getrow('kategori'); ?></div>
                                            <div>Total Kategori!</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="../../berita/tampil-kategori.php">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                            <div class="panel panel-red">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-book fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge"><?php echo $tadmin->getrow('berita'); ?></div>
                                            <div>Total Berita!</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="../../berita/tampil-berita.php">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                          <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-eye fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $tadmin->getrow('admin'); ?></div>
                                        <div>Total Admin!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="tabel-admin.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                          </div>
                    </div>

                    <div class="row">

                        <div id="container" class="col-xs-12 col-md-8">

                        </div>

                        <div class="col-xs-5 col-md-4">

                            <div class="panel panel-danger siz">
                              <div class="panel-heading">
                                <h3 class="panel-title">Pemberitahuan</h3>
                              </div>
                              <div class="panel-body">

                                <div class="alert alert-success" role="alert">
                                  <a href="#" class="alert-link"><strong>Dika</strong> Telah Ditambahkan Sebagai Admin</a>
                                </div>
                                <div class="alert alert-info" role="alert">
                                  <a href="#" class="alert-link"><strong>Dyan</strong> Telah Ditambahkan Sebagai Member</a>
                                </div>
                                <div class="alert alert-warning" role="alert">
                                  <a href="#" class="alert-link"><strong>Arif</strong> Menambahkan berita Baru</a>
                                </div>
                                <div class="alert alert-danger" role="alert">
                                  <a href="#" class="alert-link"><strong>Rofida</strong> Merubah Tampilan Fotonya</a>
                                </div>

                              </div>
                            </div>

                        </div>

                    </div>

                    <div class="row contt">

                        <div class="col-xs-5">

                          <div class="panel panel-default siz">

                            <div class="panel-heading">
                              <h3 class="panel-title">Daftar Anggota Baru</h3>
                            </div>

                            <?php
                                $no=1;
                                $show = $Lib->showmember('users');
                                while($data = $show->fetch_object()){

                              ?>
                            <div class="panel-body">
                              <img src="../../images/background+icon/photo.jpg" alt="responsive-images" class="img-pan"> <?php echo $data->nama; ?>
                            </div>
                            <?php } ?>

                            <button class="btn btn-primary btn-custome">Tambah Anggota</button>

                          </div>

                        </div>

                        <div class="col-xs-5">

                          <div class="panel panel-default siz">

                            <div class="panel-heading">
                              <h3 class="panel-title">Daftar Berita Favorite</h3>
                            </div>

                            <?php
                                $show = $Lib->showberitas('berita');
                                while($data = $show->fetch_object()){
                              ?>

                            <div class="panel-body">
                                <img src="../../images/background+icon/photo.jpg" alt="responsive-images" class="img-pan"> <?php echo $data->judul_berita; ?>
                            </div>
                            <?php } ?>

                             <button class="btn btn-primary btn-custome">Tambah Berita</button>
                          </div>

                        </div>

                    </div>

                  </div><!-- End Content -->

            <!-- Footer -->

                <div class="row">

                    <div class="footer">
                        &copy Beritahukan.Com
                    </div>

                </div>  <!-- footer -->

            </div> <!-- col-sm-10 -->

        </div> <!-- End Row -->

    </div>

        <script src="../../lib/css/js/jquery.min.js"></script>
        <script src="../../lib/css/js/bootstrap.min.js"></script>

    </body>
</html>
