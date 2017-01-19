<?php 

	require_once '../../core/init.php';

	if (!Session::exists('username')) {
		header('location: login.php');
	}

 ?>
 <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard User</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="../../lib/css/css/bootstrap.min.css">

    <!-- MetisMenu CSS -->
    <link href="../../lib/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../lib/dist/css/sb-admin-2.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <!-- Morris Charts CSS -->
    <link href="../../lib/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../lib/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->

        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Beritahukan.Com</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <img src="../../images/background+icon/photo.jpg" style="width: 50px; height: 50px;" alt="responsive-images" class="img-p"> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">

                <!-- Sidebar Menu -->

                    <ul class="nav" id="side-menu">
                    
                    <!-- Form Search -->

                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                    <!-- End Search -->

                        <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-book fa-fw"></i>Berita<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Tulis Berita</a>
                                </li>
                                <li>
                                    <a href="#">Edit Berita</a>
                                </li>
                                <li>
                                    <a href="#">Hapus Berita</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                    <!-- End Side -->
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default jrk-panel">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i>Pengunjung Dan Pembaca
                                <div class="pull-right">
                                <div class="btn-group">
                                    
                                </div>
                                </div>
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div id="container"></div>
                            </div>
                            <!-- /.panel-body --> 
                    </div>
                </div>
            </div>
        <!-- /#page-wrapper -->
        </div>
        <footer style="padding:0px 50px 20px 200px; margin:20px 0px 0px 0px; width: 100%; height: 50px; line-height: 50px;">
            <p class="pull-left" align="center"><a href="#">&copy Beritahuka.Com</a></p>
            <p class="pull-right"><a href="#">Back To Top</a></p>
        </footer>

    </div> <!-- /#wrapper -->


    <script src="../../lib/css/js/jquery.min.js"></script>
    <script src="../../lib/css/js/bootstrap.min.js"></script>
    <script src="../../lib/vendor/metisMenu/metisMenu.min.js"></script>
    <script src="../../lib/css/Highcharts/code/highcharts.js"></script>
    <script src="../../lib/css/js/style.js"></script>
    <script src="../../lib/dist/js/sb-admin-2.js"></script>

</body>

</html>
