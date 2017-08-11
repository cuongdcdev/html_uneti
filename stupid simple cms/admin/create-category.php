<?php 
require_once("../inc/lib.php");
checkLogin();


	if( $_SERVER["REQUEST_METHOD"] == "POST" ){
		
		

		$title = $_POST["title"];
		$excerpt = $_POST["excerpt"];

		$sql = "INSERT INTO category( title ,  excerpt )
			      VALUES  ( '{$title}' , '{$excerpt}' ) ";

		$query = mysqli_query( $conn , $sql );

		if( $query ){
			echo " <h1>Cập nhật thành công !</h1>";
		}else{
			echo "<h1>Cập nhật thất bại ! </h1>"  . mysqli_error($conn);
		}




	}
 ?>
 
<?php require_once 'template/head.php'; ?>


	<div id="page-create-post">
		
		<h1>Tạo chuyên mục mới !  </h1>
		<a href="index.php" >Về trang admin</a>
		<form action="" method="post" >
			<label>
				Nhập tên chuyên mục
				<input type="text" name="title" placeholder="nhập tiêu đề chuyên mục" />
			</label>

			<label>
				Nhập nội dung
				<textarea name="excerpt" placeholder="nhập tóm tắt ở đây"></textarea>
			</label>

			<button type="submit">
				Viết bài mơi !
			</button>

		</form>
	</div>

<?php require_once 'template/footer.php'; ?>