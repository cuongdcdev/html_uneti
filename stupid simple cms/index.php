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

					$currentPage = empty($_GET["page"]) ? 1 : ($_GET["page"]); // so trang chay tu 1, nhung ham LIMIT trong MYSQL LAI CHAY TU 0 -> PAGE - 1 
					$startFrom =  ($currentPage-1) * $postsPerPage ; //  lay tu so n 
					$totalPosts = get_total_posts(); // lay ve tong so bai viet 
					$totalPages = round(  $totalPosts / $postsPerPage ); // lay ve tong so trang 
					$sql = "SELECT * FROM posts LIMIT {$startFrom} , {$postsPerPage} ";
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


				<?php if( $totalPages > 0  ): ?>

					<div id="pagination">
						<ul>
							<?php for( $i = 0 ; $i < $totalPages ; $i++ ): ?>

								<li><a href="index.php?page=<?php echo ($i + 1);?>"> <?php echo ($i+1) ?> </a></li>

							<?php endfor ;?>
						</ul>	
					</div><!-- #pagination -->

				<?php endif;?>


					</div><!--- #main-content -->	

				<?php require_once 'template/sidebar.php'; ?>

			</div><!-- #content -->

		<?php require_once("template/footer.php");?>