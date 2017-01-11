<h1>day la phan dau trang web </h1>

<?php 
	if( isset( $_GET["r"] ) ) {
		$router = $_GET["r"];

		//bat dau tien hanh cài đặt điều khiển router 
		switch( $router  ){

			case "danh-muc":
				include("inc/danh-muc.html");
			break;

			case "single":
				include("inc/single.php");
			break;

			case "search":
				include("inc/search.php");
			break;

			case "bai-viet-moi":
				include("inc/bai-viet-moi.html");
			break;


			default:
				include("inc/home.html");	
		}
	}else{
		echo "HELLO! ĐÂY LÀ TRANG CHỦ !";
		include("inc/home.html");
	}
 ?>

 <h1>day la chan trang web ! </h1>