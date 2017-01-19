<?php

	class User{
		private $_db;

		public function __construct(){
			$this->_db = Database::getInstance();
		}

		public function register_user($fields = array()){ // array karena data yang digunakan pada register.php bertipe array juga

			if( $this->_db->insert('users',$fields) ) return true;
			else return false;
		}

		public function login_user($username,$password){

			$data = $this->_db->getInfo('users','username',$username);

			if( password_verify( $password, $data['password'] ) )
				return true;
			else return false;
		}

		public function loginAdmin($username,$password){

			$dataAdmin = $this->_db->getInfo('admin','username',$username);

			if ( password_verify( $password,$dataAdmin['password'] ) )
				return true;
			else
				return false;
		}

		public function logout(){

			// Hapus Session
			session_destroy();

			header('location: login.php');
		}
	}

 ?>
