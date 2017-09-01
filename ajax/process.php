<?php
var_dump( $_SERVER );
if( $_SERVER["REQUEST_METHOD"]  == "POST" ){
$a = $_POST["a"];
	$b = $_POST["b"];

	switch( $_POST["tinh"] ){
		case "cong":
			echo $a + $b;
		break;

		case "tru":
			echo $a - $b ;
		break;

		case "nhan":
			echo $a * $b ;
		break;

		case "chia":
			echo $a/$b;
		break;

		default:
			echo "clgv?";
	}

}//if post 
	