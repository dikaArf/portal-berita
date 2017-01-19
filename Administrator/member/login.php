<?php 

	require_once '../../core/init.php';

	$errors =array();

	if (input::get('daftar')) {

		// 1. Memanggil Object validasi
		$validation = new validasi();

		// 2. metode check
		$validation = $validation->check(array(
			'username' => array('required' => true,),
			'password' => array('required' => true,)
			));
		// 3. Lolos ujian
		if ($validation->passed()){
			

				if( $user->login_user( input::get( 'username' ), input::get( 'password' ) ) )
				{

					Session::set('username' , input::get('username'));
					header('Location: profile.php');
				
				}else{

					echo "<Script>alert('Login Gagal')</script>";

				}

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

		<link rel="stylesheet" href="../../lib/css/css/bootstrap.min.css">
		<link rel="stylesheet" href="../../lib/css/css/style.css">
		<link rel="stylesheet" href="../../administrator/admin/style.css">

		
	</head>
	<body>
		<div class="container-fluid">

			<!-- Header -->

			<?php require_once '../../template/header.php'; ?>
			
			<!-- Content -->

			<div class="row">
				<div class="col-md-4 login">
					<div class="row">
						<div class="outter-form-login lg-mem">

							<form action="login.php" method="POST" class="inner-login" name="login">
								<table class="tabel">
								<tr>
									<td colspan="3" class="log-ad">Login Member</td>
								</tr>
								<tr>
									<td class="baris-colom">
										<img src="../../images/background+icon/profle.png" alt="Responsive image" class="images">
									</td>
									<td>
										<input type="text" class="form-control" name="username" placeholder="USERNAME" required="">
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
										<button class="btn btn-block btn-custom-green" name="daftar" value="login">LOGIN</button>
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
								<div id="errors">
									<?php if (!empty($errors)) { ?>
										<?php foreach ($errors as $error) { ?>
											<li><?php echo $errors ?></li>
										<?php } ?>
									<?php } ?>
								</div>
								</table>
							</form>
						
						</div>
						
					</div>
				</div>
			</div>

			<br class="floating">

			<!-- Footer -->

			<?php require_once '../../template/footer.php'; ?>

		</div>
		<script src="../../lib/css/js/jquery.min.js"></script>
		<script src="../../lib/css/js/bootstrap.min.js"></script>

	<!-- <script>
		$(document).ready(
			function(){
				$(".dropdown").hover(

					function() {
						$('.dropdown-menu', this).stop( true, true ).slideDown("fast");
						$(this).toggleClass('open');        
					},

					function() {
						$('.dropdown-menu', this).stop( true, true ).slideUp("fast");
						$(this).toggleClass('open');       
					}
				);
			}
		);
	</script> -->

	</body>
</html>
