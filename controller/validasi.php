<?php 

	class validasi{

		private $_passed = false, // false secara default jika tidak ada error maka nilai nya akan berubah menjadi trus;
				$_errors = array();
	

		public function check($items /* sebagai nama array */ = array()){

			foreach ($items as $item => $rules) {
				foreach ($rules as $rule => $ruleValues) {
					
					switch ($rule) {
						case 'required':
							if (trim(input::get($item)) == false) {
								$this->addError("$item wajib diisi");
							}
							break;
						case 'min':
							if (strlen(input::get($item)) < $ruleValues) {
								$this->addError("$item Minimal $ruleValues Karakter");
							}
							break;
						case 'min':
							if (strlen(input::get($item)) > $ruleValues) {
								$this->addError("$item Maximasl $ruleValues Karakter");
							}
							break;
						default:
							break;
					}

				}
			}

			if (empty($this->_errors)) {
				$this->_passed=true;
			}

			return $this;
		} //  End First Foreach 

		public function addError($error){
			$this->_errors[] = $error;
		}

		public function errors(){
			return $this->_errors;
		}

		public function passed(){
			return $this->_passed; // Metode Passed ini untuk mengembalikan nilai dari variable _passed
		}
	}

 ?>