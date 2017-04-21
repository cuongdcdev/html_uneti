<?php 
	require_once 'inc/lib.php';
 ?>

<!doctype HTML>
	<html>
		<head>
			<meta charset="utf-8"/>
			<meta name="viewport" content="width=device-width" />	
			<title>Ublog home page !</title>
			<link rel="stylesheet" type="text/css" href="css/main2.css" />
			<link rel="stylesheet" type="text/css" href="css/media.css" />
		</head>

		<body>
			<div id="header">

				<a class="logo">
					<img src="img/logo.png" title="Logo Ublog"/>
				</a><!-- .logo -->

				<div class="menu">
					<ul>
						<li><a href="#">Công nghệ</a></li>
						<li><a href="#">Thể thao</a></li>
						<li><a href="#">Gỉai trí</a></li>
						<li><a href="#">Về chúng tôi</a></li>
						<li><a href="#">Liên hệ</a></li>
						<li><a href="#">Đăng kí</a></li>
						<li><a href="#">Đăng nhập</a></li>
					</ul>	
				</div>

			</div><!-- #menu -->

			<div id="content">

				<div id="main-content">


				<?php 
					$sql = "SELECT * FROM posts";
					$rs = mysqli_query( $conn , $sql );

					while( $row = mysqli_fetch_array( $rs   , MYSQLI_ASSOC ) ){
				?>
					<div class="block-news">
						
						<div class="block-news-image">
							<img src="img/anh1.png"/>
						</div>

						<div class="block-news-content">
							<h2 class="block-news-title"><?php echo $row["title"]; ?></h2>

							<div class="block-news-text">
								<?php echo $row["excerpt"];?>
							</div>
						</div>

					</div><!-- .block-news -->

				<?php } ?>


				</div><!--- #main-content -->

				<div id="sidebar">

					<div class="block-news">

						<div class="block-news-content">
							<h2 class="block-news-title">Bài viết nổi bật</h2>
							<div class="block-news-text">
								 Excepteur sint occaecat cupidatat non
								 voluptate velit esse
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</div>
						</div><!-- .block-news-content -->

					</div><!-- .block-newws -->

										<div class="block-news">

						<div class="block-news-content">
							<h2 class="block-news-title">Bài viết nổi bật</h2>
							<div class="block-news-text">
								 Excepteur sint occaecat cupidatat non
								 voluptate velit esse
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</div>
						</div><!-- .block-news-content -->

					</div><!-- .block-newws -->

										<div class="block-news">

						<div class="block-news-content">
							<h2 class="block-news-title">Bài viết nổi bật</h2>
							<div class="block-news-text">
								 Excepteur sint occaecat cupidatat non
								 voluptate velit esse
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</div>
						</div><!-- .block-news-content -->

					</div><!-- .block-newws -->

										<div class="block-news">

						<div class="block-news-content">
							<h2 class="block-news-title">Bài viết nổi bật</h2>
							<div class="block-news-text">
								 Excepteur sint occaecat cupidatat non
								 voluptate velit esse
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</div>
						</div><!-- .block-news-content -->

					</div><!-- .block-newws -->

										<div class="block-news">

						<div class="block-news-content">
							<h2 class="block-news-title">Bài viết nổi bật</h2>
							<div class="block-news-text">
								 Excepteur sint occaecat cupidatat non
								 voluptate velit esse
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</div>
						</div><!-- .block-news-content -->

					</div><!-- .block-newws -->

										<div class="block-news">

						<div class="block-news-content">
							<h2 class="block-news-title">Bài viết nổi bật</h2>
							<div class="block-news-text">
								 Excepteur sint occaecat cupidatat non
								 voluptate velit esse
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</div>
						</div><!-- .block-news-content -->

					</div><!-- .block-newws -->

										<div class="block-news">

						<div class="block-news-content">
							<h2 class="block-news-title">Bài viết nổi bật</h2>
							<div class="block-news-text">
								 Excepteur sint occaecat cupidatat non
								 voluptate velit esse
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</div>
						</div><!-- .block-news-content -->

					</div><!-- .block-newws -->

										<div class="block-news">

						<div class="block-news-content">
							<h2 class="block-news-title">Bài viết nổi bật</h2>
							<div class="block-news-text">
								 Excepteur sint occaecat cupidatat non
								 voluptate velit esse
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</div>
						</div><!-- .block-news-content -->

					</div><!-- .block-newws -->



					</div><!-- .block-news -->


				</div><!-- #sidebar -->

			</div><!-- #content -->



		</body>

	</html>