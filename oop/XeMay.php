<?php 
	class XeMay{


//properties: thuoc tinh  

		var $banhXe;
		var  $tocDo;
		var $mauXe;
		var $hangSx;


//methods : cac phuong thuc 

		//ham khoi tao 
		function __construct( $banhXe = 2, $tocDo = 60 , $mauXe = "eo bit", $hangSx ="ko biet not "  ){
							//        ^-- tham so mac dinh
			$this->banhXe = $banhXe;
			$this->tocDo = $tocDo;
			$this->mauXe = $mauXe;
			$this->hangSx = $hangSx;


		}


		function getTocDo(){
			return $this->tocDo;
		}

		function setTocDo( $tocDo ){
			$this->tocDo = $tocDo;
		}

		function getMauXe(){
			return $this->mauXe;
		}

		function setMauXe($mau){
			return $this->mauXe = $mau;
		}


		function getHangSx(){
			return $this->hangSx;
		} 

		function setHangSx($hang){
			$this->hangSx = $hang;
		}


	}
