<?php 
	session_start(); //ham tao session

?>
<?php 
	$x = "xin chao !!!!!";
?>

<?php include("inc/head.php"); ?>

<?php include("inc/menu.php");?>

<?php include("inc/header.php"); ?>

<?php 
	if( !empty( $_GET["r"]) &&  $_GET["r"] == "single" ){
		 include("inc/single-content.php");	//trang don
	}else{
		include("inc/main-content.php"); // trang chu 
	}
?>


<?php include("inc/footer.php");?>