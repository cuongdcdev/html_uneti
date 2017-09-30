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


// test class xemay :

 $xeMay = new XeMay(); //khoi tao ko co tham so 

 $xemay2 = new XeMay( 4, 70, "do" , "honda" ); //khoi tao full tham so 


 $xeMay3 = new XeMay(6, 10);//banh + toc do 


echo "<br/> xe may 2 :, toc do la: " . $xemay2->getTocDo() . "| hang sx: " . $xemay2->getHangSx() . "| mau : " . $xemay2->getMauXe();

echo "<br/> xe may 1 :, toc do la: " . $xeMay->getTocDo() . "| hang sx: " . $xeMay->getHangSx() . "| mau : " . $xeMay->getMauXe();

echo "<br/> xe may 3 :, toc do la: " . $xeMay3->getTocDo() . "| hang sx: " . $xeMay3->getHangSx() . "| mau : " . $xeMay3->getMauXe();

