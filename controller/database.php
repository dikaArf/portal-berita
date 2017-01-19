<?php
	class Database
	{

		private static $INSTANCE = null;
		private $mysqli,
				$HOST = 'localhost',
				$USER = 'root',
				$PASS = '',
				$DBNAME = 'db_tugas_pb';


		public function __construct()
			{

				$this->mysqli = new mysqli($this->HOST,$this->USER,$this->PASS,$this->DBNAME);
				if (mysqli_connect_error()) {
					die('gagal Koneksi');
				}
			}
			// Singleton Pattren
			// Menguji Koneksi agar tidak double
		public static function getInstance()
			{
				if (!isset(self::$INSTANCE)) {
					self::$INSTANCE = new Database();
				}
					return self::$INSTANCE;
			}


		public function insert($tabel, $fields = array())
			{
				// mengambil Kolom
				$column = implode(", ", array_keys($fields));

				// Mengambil Nilai
				$valuesArray =  array();
				$i = 0;

				foreach ($fields as $key => $values) {
					if ( is_int($values) ){
						$valuesArray[$i] = $this->escape($values);
					}else{
						$valuesArray[$i] = "'".$this->escape($values)."'";
					}
					$i++;
				}

				$values = implode(", ", $valuesArray);

				$query = "INSERT INTO $tabel ($column) VALUES ($values)";

				$this->run_query($query);

			}

		public function getInfo($table,$colom,$value){

			if ( !is_int($value) ) $value = "'".$value."'";

			$query = "SELECT * FROM $table WHERE $colom = $value";
			$result = $this->mysqli->query($query);

			while ($row = $result->fetch_assoc())
			{
				return $row;
			}
		}

		public function getrow($table){
			$sql = "SELECT * FROM $table";
			$result = $this->mysqli->query($sql);
			$row = $result->num_rows;
			return $row;
		}

		public function showberita($table){
			$sql = "SELECT * FROM $table p INNER JOIN kategori k ON p.id_kategori=k.id_kategori LIMIT 0,10";
			$query = $this->mysqli->query($sql);
			return $query;
		}

		public function showberitas($table){
			$sql = "SELECT * FROM $table LIMIT 0,3";
			$query = $this->mysqli->query($sql);
			return $query;
		}

		public function slideberitas($table,$id){
			$sql = "SELECT * FROM $table ORDER BY $id LIMIT 0,1";
			$query = $this->mysqli->query($sql);
			return $query;
		}

		public function showmember($table){
			$sql = "SELECT * FROM $table LIMIT 0,10";
			$result = $this->mysqli->query($sql);
			return $result;
		}

		public function showkategori($table,$id){
			$sql = "SELECT * FROM $table ORDER BY $id";
			$query = $this->mysqli->query($sql);
			return $query;
		}

		public function viewberitas($table,$id){
			$sql = "SELECT * FROM $table ORDER BY $id";
			$query = $this->mysqli->query($sql);
			return $query;
		}

		public function viewberita(){
			$sql = "SELECT * FROM berita b INNER JOIN kategori k ON b.id_kategori=k.id_kategori INNER JOIN users u ON b.id_users=u.id_users LIMIT 0,3";
			$result = $this->mysqli->query($sql);
			return $result;
		}

		public function viewslide(){
			$sql = "SELECT * FROM berita" OR die(mysql_error());
			$result = $this->mysqli->query($sql);
			$row = $result->num_rows;
			return $row;

		}

		public function deleteberita($table,$id)
		{
			$sql = "DELETE FROM $table WHERE id_berita=".$id;
			$result = $this->mysqli->query($sql);
			return $result;
		}

		public function editberita($field,$id){

			$sql = "SELECT * FROM berita WHERE id_berita = '$id'";
			$result = $this->mysqli->query($sql);
			$data = $result->fetch_assoc();
			if ($field == 'judul_berita')
					return $data['judul_berita'];
			else if ($field == 'isi_berita')
							return $data['isi_berita'];
			else if ($field == 'kategori')
							return $data['kategori'];

		}

		public function updateberita($id,$judul,$isi,$kategori) {
        $query = "UPDATE berita SET judul_berita='$judul',isi_berita='$isi',id_kategori='$kategori' WHERE id_berita='$id'";
        $result = $this->mysqli->query($query);

        if ($result)
		    echo "<script>alert('Data Berhasil Di Perbarui');</script>";
				else
            echo "<script>alert('Data Gagal Di Perbarui')</script>";

    }

		public function run_query($query){
				if($this->mysqli->query($query))return true;
				else return false;
			}

		public function escape($name){
			return $this->mysqli->real_escape_string($name);
		}


	}



 ?>
