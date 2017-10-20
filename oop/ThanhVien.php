<?php 
	class ThanhVien{
		private $connection;
		public $id;
		public $name;
		public $info;
		public $ma_lop;

		

		public function __construct( $id = false , $name = false, $info = false , $ma_lop = false  ){
			$this->id = $id ; 
			$this->name = $name;
			$this->info = $info;
			$this->ma_lop = $ma_lop;
		}



		public function setConnection( $connection){


			$this->connection = $connection;
		}

		public function getMysqlError(){
			return mysqli_error($this->connection);
		}

		public function findByID( $id ){
			$sql = "SELECT * FROM thanh_vien WHERE id = {$id} ";
			$query = mysqli_query( $this->connection, $sql );
			$thanhVien = mysqli_fetch_object( $query );
			return $thanhVien;
		}

//ham tra ve 1 mang chua ket qua can tim 
		public function findByName( $name ){
			$name = mysqli_escape_string( $this->connection, $name );
			$sql = "SELECT * FROM thanh_vien WHERE name = '$name' ";
			$rs = mysqli_query( $this->connection, $sql );
			$thanhVienArr = array();
			while( $thanhVien = mysqli_fetch_object( $rs ) ){
				$thanhVienArr[] = $thanhVien;
			}
			return $thanhVienArr;

		}

		public function deleteAllByName( $name ){
			$name = mysqli_escape_string( $this->connection, $name );
			$sql = "DELETE FROM thanh_vien WHERE name = '$name' ";
			$rs = mysqli_query( $this->connection, $sql );

			return $rs == true ? true : false ;
		}
		public function deleteById($id){
			$sql = "DELETE FROM thanh_vien WHERE id= $id ";
			$query = mysqli_query($this->connection,  $sql );
			return $query == true ? true : false;
		}

		public function delete( $thanhVien ){
			$sql = "DELETE FROM thanh_vien WHERE id={$thanhVien->id}";
			$query = mysqli_query( $this->connection, $sql );
			return $query == true ? true : false;
		}
		public function insert( $thanhVien ){
			    		$thanhVien->name = mysqli_escape_string($this->connection, $thanhVien->name );
			    		$thanhVien->info = mysqli_escape_string( $this->connection, $thanhVien->info );
			    		$thanhVien->ma_lop = mysqli_escape_string($this->connection,  $thanhVien->ma_lop );

						$sql = "INSERT INTO thanh_vien(name,info,ma_lop) VALUES ( 
						 	 '{$thanhVien->name}' ,
		      				 '{$thanhVien->info}',
		      				  '{$thanhVien->ma_lop}'
		      			)" ;

	      	$query = mysqli_query( $this->connection,  $sql );
	      	return $query == true ?  true : false;	
		}

		public function update( $thanhVien ){
			
			$thanhVien->name = mysqli_escape_string($this->connection, $thanhVien->name );
    		$thanhVien->info = mysqli_escape_string( $this->connection, $thanhVien->info );
    		$thanhVien->ma_lop = mysqli_escape_string($this->connection,  $thanhVien->ma_lop );

			$sql = "UPDATE thanh_vien 
					SET	 name='{$thanhVien->name}' ,
	      				 info='$thanhVien->info',
	      				 ma_lop = '{$thanhVien->ma_lop}'  
	      			WHERE id = '{$thanhVien->id}'
	      			LIMIT 1 
	      				 " ;


	      	$query = mysqli_query( $this->connection ,  $sql );
	      	return $query == true ?  true : false;
		}


		public function getAll(){
			$sql = "SELECT * FROM thanh_vien";
			$query = mysqli_query( $this->connection, $sql );
			$allThanhVien = array();
			while(  $rs = mysqli_fetch_array($query , MYSQLI_ASSOC )  ){
				$allThanhVien[] = $rs;
			}

			return $allThanhVien;
		}


	}