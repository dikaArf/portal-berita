<?php

	require_once ('../core/init-2.php');
	$Lib = new database();

	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Tampil Berita</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width , initial-scale=1">

		<link rel="stylesheet" href="../lib/css/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="../administrator/admin/style.css">
        <link href="../lib/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="../lib/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../lib/dist/css/sb-admin-2.css" rel="stylesheet">

	</head>
	<body>
		<div class="container-fluid">

			<div class="row  bg-admin">

				<div class="col-sm-2">

	                <div class="row">

	                        <?php require_once '../template/sid-brt.php'; ?>
	                
	                </div> <!-- End Row -->

            	</div><!-- End Col -->
				
            
				<div class="col-sm-10 bg-cont">
			
			<!-- Header -->
			
					<div class="row">

                        <?php require_once '../template/hed-nav-admin.php'; ?>

                	</div> 

			<!-- Content -->
					<div class="content">

					
						<a href="post-berita.php" class="btn btn-primary">Tambah Ketegori</a>
						<table class="table table-bordered">
							<thead>
								<th>NO</th>
								<th>Judul Kategori</th>
								<th colspan="2">Aksi</th>
							</thead>
							<tbody>
							
								<?php
									$no=1;
									$show = $Lib->showberita('kategori');
									while($data = $show->fetch_object()){
								?>

									<tr>
										<td><?php echo $no; ?></td>
										<td><?php echo $data->judul_kategori ?></td>
										
										<td>
											<a href="edit-berita.php?kode=$data->id_berita" class="btn btn-danger">Edit</a>
											<a class='btn btn-success' href='tampil-berita.php?delete=<?php $data->id_berita ?>'>Delete</a>			
										</td>
									</tr>

									<?php $no++; ?>
								<?php } ?>

							</tbody>
						</table>

					</div>
			
			<!-- Footer -->

	                <div class="row footer">

	                    <div class="footer">
	                        &copy Beritahukan.Com
	                    </div>

	                </div>  <!-- footer -->
                </div>

			</div>
		</div>



		<script src="../lib/css/js/jquery.min.js"></script>
        <script src="../lib/css/js/bootstrap.min.js"></script>
	</body>
</html>

<?php 

	if(isset($_GET['delete'])){
	$del = $Lib->deleteberita($_GET['delete']);
	 
	}

 ?>