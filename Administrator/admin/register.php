<?php 

	require_once '../../core/init.php';

	$errors =array();

	if (input::get('daftar')) {

		// 1. Memanggil Object validasi
		$validation = new validasi();

		// 2. metode check
		$validation = $validation->check(array(
			'username' => array(
							'required' => true,
							'min' => 3,
							'max' => 25
						),
			'password' => array(
							'required' => true,
							'min' => 8,
						)
			));
		// 3. Lolos ujian
		if ($validation->passed()){
			
			$user->register_admin(array(
								'nama_lengkap' => input::get('name'),
								'username' => input::get('username'),
								'password' => password_hash(input::get('password'), PASSWORD_DEFAULT),
								'email' => input::get('email')
			));

			Session::set('username', input::get('username'));
			header('Location: admin.php');

		}else{
			$errors = $validation->errors();
		}
	}

 ?>


<!DOCTYPE html>
<html>
	<head>
		<title>
			Daftar Account
		</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" type="text/css" href="lib/css/css/bootstrap.css">

		<!-- Website CSS style -->
		<link rel="stylesheet" type="text/css" href="lib/css/css/main.css">

		<!-- Website Font style -->
	    <link rel="stylesheet" href="lib/vendor/font-awesome/css/font-awesome.min.css">
	</head>
	<body>
		<div class="container">
			<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h3 class="title">Company Name</h3>
	               		<hr />
	               	</div>
	            </div> 
				<div class="main-login main-center">
					<form class="form-horizontal" method="post" action="#">
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Your Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Your Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Username</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Confirm your Password"/>
								</div>
							</div>
						</div>

						<div class="form-group ">
							<input type="submit" class="btn btn-primary btn-lg btn-block login-button" name="daftar" value="Daftar Sekarang">
						</div>
						<div class="login-register">
				            <a href="login.php">Login</a>
				         </div>
					</form>
				</div>
			</div>
		</div>

		<script type="text/javascript" src="lib/css/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="lib/css/js/jquery.min.js"></script>
	</body>
</html>
