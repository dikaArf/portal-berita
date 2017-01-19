<?php 

	require_once '../../core/init.php';

	$errors = array();

	if (input::get('login')) {
		
		// 1. Memanggil Obeject class Validasi
		$validation = new validasi();

		// 2. Metode check atau check validasi
		$validat = $validation->check(array(
				'username' => array('required' => true),
				'password' => array('required' => true)
				));

		//3. Jika Lolos Maka Akan Menjalankan Fungsi Berikut
		if ($validation->passed()) {
			
			if ($admin->loginAdmin( input::get( 'username' ), input::get( 'password' ) ) ) {
					Session::set('username', input::get('username'));
					header('Location: admin.php');
			}else{
				echo "<script>alert('Login Gagal')</script>";
			}
		}else{
			$errors = $validation->errors();
		}
	}

 ?>




<!DOCTYPE html>
<html>
	<head>
		<title>Login Admin</title>
		<meta charset="UTF-*">
		<meta name="viewport" content="width=device-width , initial-scale=1">

		<!-- Link Bootstrap -->
		<link rel="stylesheet" href="../../lib/css/css/bootstrap.min.css">
		<link rel="stylesheet" href="../../lib/css/css/style.css">
		
	</head>
	<body> 
	<img src="../../images/background+icon/b-login.png" alt="Responsive-image" class="bg">
		<div class="container-fluid">
			<div class="col-md-4 form-login">
				<div class="row">
					<div class="outter-form-login">

						<form action="" method="POST" class="inner-login" name="login">
						
						<table class="tabel">
						<tr>
							<td colspan="3" class="log-ad">Login Administrator</td>
						</tr>
						<tr>
							<td class="baris-colom">
								<img src="../../images/background+icon/profle.png" alt="Responsive image" class="images">
							</td>
							<td>
								<input type="text" class="form-control" name="username" placeholder="USERNAME" required="" autofocus="">
							</td>
						</tr>

						<tr>
							<td class="baris-colom">
								<img src="../../images/background+icon/locked.png" alt="Responsive image" class="images">
							</td>
							<td>
								<input type="password" class="form-control" name="password" placeholder="PASSWORD" required="">
							</td>
						</tr>

						<tr>
							<td colspan="2">
								<button class="btn btn-block btn-custom-green" name="login" value="login">LOGIN</button>
							</td>
						</tr>

						<tr>	
							<td></td>
							<td>
								<div class="text-center forget cfor">
									<p>Copy Right &copy <a href="#">Beritahukan.Com</a></p>
								</div>
							</td>
						</tr>

						</table>
						
						</form>
					
					</div>
					
				</div>

			</div>

		</div>


	<!-- Link JavaScript -->
		<script src="../../lib/css/js/jquery.min.js"></script>
		<script src="../../lib/css/js/bootstrap.min.js"></script>
	</body>
</html>