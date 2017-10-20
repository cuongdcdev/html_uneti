<?php 
	class Connection{
		private $connection = null;


		public function __construct( $host = "localhost" , $username= "" , $dbpassword = "" , $dbname = "" , $port=3306  ){
			$this->connection = mysqli_connect($host,  $username, $dbpassword, $dbname, $port );

			if( $this->connection ){
				mysqli_set_charset($this->connection, "utf8");
			}else{
				die("ko the ket noi toi db");
			}
		}

		public function getConnection(){
			return $this->connection;
		}


		public function getMysqlError(){
			return mysqli_error($this->connection);
		}

		//su dung cho update/insert/delete
		public function update( $query ){
			return mysqli_query($this->connection , $query);
		}

		//dung cho nhung ham tra ve kq: select , search ...
		public function select( $query ){
			$rs = mysqli_query( $this->Connection , $query );
			$objectArray = array();
			
			while ( $r = mysqli_fetch_object( $rs )  ) {
			 	$objectArray[] = $r;
		    } 

			return $r;
		}

	}