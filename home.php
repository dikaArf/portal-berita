<?php

	require_once 'controller/database.php';

	$view = new database();


 ?>

<!DOCTYPE html>
<html>
	<head>
		<title>Beritahukan.Com</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width initial-scale=1.0">

		<link rel="stylesheet" href="lib/css/css/bootstrap.min.css">
		<link rel="stylesheet" href="lib/css/css/style.css">
		<link rel="stylesheet" href="administrator/admin/style.css">
		<link rel="stylesheet" href="lib/vendor/bootstrap-social/bootstrap-social.min.css">

<script type="text/javascript">
function view_id(id)
{
		window.location='template/tampil-berita.readmore.php?view_id='+id
}
</script>
	</head>
	<body>
		<div class="container-fluid">

			<?php require_once 'template/home-header.php'; ?>

			<?php require_once 'template/content.php'; ?>

			<br class="floating">

			<?php require_once 'template/footer.php'; ?>

		</div>

		<script src="lib/css/js/jquery.min.js"></script>
		<script src="lib/css/js/bootstrap.min.js"></script>

	</body>
</html>
