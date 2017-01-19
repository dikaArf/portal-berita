<?php

	class berita{

		private $_db;

		public function __construct(){
			$this->_db = Database::getInstance();
		}

		public function post($fields = array()){

			if($this->_db->insert('berita',$fields)) return true;
			else return false;

		}

	}

 ?>
