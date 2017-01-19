<?php

    require_once ('../../core/init.php');
    $Lib = new database();


?>

<!DOCTYPE html>
<html>
    <head>
        <title>Tulis Berita</title>
        <meta http-equiv="Content-Type" content="width=device-width initial-scale=1.0"/>
        <link rel="stylesheet" href="../../lib/css/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../lib/css/css/style.css">
        <link rel="stylesheet" href="../../administrator/admin/style.css">
        <!-- Custom Fonts -->
        <link href="../../lib/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- MetisMenu CSS -->
        <link href="../../lib/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../../lib/dist/css/sb-admin-2.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="../../lib/vendor/morrisjs/morris.css" rel="stylesheet">

        <script src="../../lib/css/js/jquery.min.js"></script>
        <script src="../../lib/css/Highcharts/code/highcharts.js"></script>
        <script src="../../lib//css/js/style.js"></script>
        <script src="../../lib/css/js/ckeditor/ckeditor.js"></script>

        <script src="../../lib/css/js/ckeditor/style.js"></script>

  </head>

  <body>

    <div class="container-fluid bg-admin">

        <div class="row">

          <!-- Sidebar -->

            <div class="col-sm-2">

                <div class="row">

                        <?php require_once '../../template/side-adm.php'; ?>

                </div> <!-- End Row -->

            </div><!-- End Col -->

            <div class="col-sm-10 bg-cont">

            <!-- Header -->

                <div class="row">

                        <?php require_once '../../template/hed-nav-admin.php'; ?>
                </div>

            <!-- Content Main -->
                <div class="content">
                        <a href="post-berita.php" class="btn btn-primary">Tambah User</a>
                        <table class="table table-bordered">
                            <thead>
                                <th>NO</th>
                                <th>Nama User</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Email</th>
                                <th colspan="2">Aksi</th>
                            </thead>
                            <tbody>

                                <?php
                                    $no=1;
                                    $show = $Lib->showmember('admin');
                                    while($data = $show->fetch_object()){
                                ?>

                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $data->nama_lengkap ?></td>
                                        <td><?php echo $data->username ?></td>
                                        <td><?php echo $data->password ?></td>
                                        <td><?php echo $data->email ?></td>
                                        <td>
                                            <a href="#" class="btn btn-danger">Edit</a>
                                            <a href='#' class='btn btn-success' >Delete</a>
                                        </td>
                                    </tr>

                                    <?php $no++; ?>
                                <?php } ?>

                            </tbody>

                        </table>


                    </div>
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
