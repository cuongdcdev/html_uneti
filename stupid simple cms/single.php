<?php 
	require_once( "inc/lib.php" );


	$id = $_GET["id"];
	$sql = "SELECT * FROM posts WHERE id={$id}";
	$rs = mysqli_fetch_array(mysqli_query( $conn , $sql ) , MYSQLI_ASSOC);


?>


	<?php 
		require_once 'template/head.php';
		require_once 'template/header.php';

	?>
		<div id="content">
			<div id="main-content">
					<h1><?php echo $rs["title"];?></h1>

					<div class="main-content-content">
						<?php echo $rs["content"];?>
					</div><!-- main-content -->
			</div><!-- #main-content -->

			<?php require_once("template/sidebar.php");?>

		</div><!-- #content -->

<?php require_once("template/footer.php");?>