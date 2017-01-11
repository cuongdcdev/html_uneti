<?php 

	if( isset( $_GET["name"] ) ){
		echo "<h1>tieu de ban nhap la: " . $_GET["name"] . "</h1>";
	}else{
		echo "tieu de trong ! ";
	}

	if( isset( $_GET["content"] ) ){
		echo "<b>noi dung ban nhap la : " .  $_GET["content"] . "</b>";
	}else{
		echo "<br/> noi dung trong ! ";
	}

?>