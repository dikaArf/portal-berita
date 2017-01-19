<?php 

	require_once '../../core/init.php';

	$user = new user;
	$logout = $user->logout();

	header('location:login.php');

 ?>