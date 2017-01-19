<?php

	session_start();

	// Me-Load Semua Class

	spl_autoload_register(function($class){
		require_once '../../controller/'.$class.'.php';
	});


	$user =  new User();
	$admin =  new User();
	$tadmin = new database();

 ?>
