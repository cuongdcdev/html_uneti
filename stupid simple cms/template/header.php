<div id="header">

				<a class="logo">
					<img src="img/logo.png" title="Logo Ublog"/>
				</a><!-- .logo -->

				<div class="menu">
					<ul>
			

						<?php 
							$sql = "SELECT id,title FROM category";
							$rs = mysqli_query($conn, $sql);

							while( $row = mysqli_fetch_array($rs, MYSQLI_ASSOC) ):
						?>

						<li>
							<a title="<?php echo $row['title'];?>" href="<?php echo "category.php?id=".$row['id'] ?>">
								 <?php echo $row["title"];?>
							</a>
						</li>	

					    <?php endwhile;?>
					</ul>	
				</div>

			</div><!-- #menu -->
