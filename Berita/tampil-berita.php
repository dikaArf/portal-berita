<?php

	require_once ('../core/init-2.php');

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

<script type="text/javascript">
function del_id(id)
{
	if(confirm('Anda Yakin Ingin Menghapus Berita Ini ? ?'))
	{
		window.location='delete.php?delete_id='+id
	}
}
function edit_id(id)
{
	if(confirm('Anda Yakin Ingin Merubah Berita Ini ?'))
	{
		window.location='edit-berita.php?edit_id='+id
	}
}
</script>

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
						<h2 align="center">DAFTAR LIST BERITA DI BERITAHUKAN.COM</h2><br/>
						<a href="post-berita.php" class="btn btn-primary">Tambah Berita</a>
						<form action="<?php $_SERVER['PHP_SELF']; ?>" method="GET">
							<table class="table table-bordered" style="margin-top:20px; ">
							<thead>
								<th>NO</th>
								<th>Tanggal</th>
								<th>Judul Berita</th>
								<th>Images</th>
								<th style="width:250px;">Isi Berita</th>
								<th>Kategori</th>
								<th colspan="2">Aksi</th>
							</thead>
							<tbody>

								<?php
									$no=1;
									$show = $berita->showberita('berita');
									while($data = $show->fetch_object()){
										$berita = substr($data->isi_berita ,0,100)
								?>

									<tr>
										<td><?php echo $no; ?></td>
										<td><?php echo $data->tanggal ?></td>
										<td><?php echo $data->judul_berita ?></td>
										<td></td>
										<td><?php echo $berita ?></td>
										<td><?php echo $data->judul_kategori ?></td>
										<td>
											<a href="javascript:edit_id(<?php echo $data->id_berita; ?>)" class="btn btn-danger">Edit</a>
											<a href="javascript:del_id(<?php echo $data->id_berita; ?>)" class="btn btn-success">Delete</a>
										</td>
									</tr>

									<?php $no++; ?>
								<?php } ?>

							</tbody>

						</table>
						</form>


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
