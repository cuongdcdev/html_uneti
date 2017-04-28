<?php 
	require_once 'inc/lib.php';
 ?>

<!-- head.php -->
	<?php require_once("template/head.php"); ?>
<!-- head.php -->

			
			<!-- header.php -->
				<?php require_once("template/header.php");?>
			<!-- header.php -->


			<div id="content">

				<div id="main-content">


				<?php 
					$sql = "SELECT * FROM posts";
					$rs = mysqli_query( $conn , $sql );

					while( $row = mysqli_fetch_array( $rs   , MYSQLI_ASSOC ) ){
				?>
					<div class="block-news">
						
						<a href="single.php?id=<?php echo $row["id"]; ?>" class="block-news-image">
							<img src="img/anh1.png"/>
						</a>

						<div class="block-news-content">
							<a href="single.php?id=<?php echo $row["id"];?>">
								<h2 class="block-news-title"><?php echo $row["title"]; ?></h2>
							</a>
							<div class="block-news-text">
								<?php echo $row["excerpt"];?>
							</div>
						</div>

					</div><!-- .block-news -->

				<?php } ?>
					</div><!--- #main-content -->	

				<?php require_once 'template/sidebar.php'; ?>

			</div><!-- #content -->

		<?php require_once("template/footer.php");?>