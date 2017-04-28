<?php 

	if( $_SERVER["REQUEST_METHOD"] == "POST" ){
		
		require_once("../inc/lib.php");
		

		$title = $_POST["title"];
		$content = $_POST["content"];
		$excerpt = $_POST["excerpt"];

		$sql = "INSERT INTO posts( title , content , excerpt , user_id )
			      VALUES  ( '{$title}' , '{$content}' , '{$excerpt}' , 1 ) ";

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
		
		<h1>Tạo bài viết </h1>
		<a href="index.php" >Về trang admin</a>
		<form action="" method="post" >
			<label>
				Nhập tên bài viết
				<input type="text" name="title" placeholder="nhập tiêu đề" />
			</label>

			<label>
				Nhập tóm tắt
				<textarea name="excerpt" placeholder="nhập tóm tắt ở đây"></textarea>
			</label>

			<label>
				Nhập nội dung
				<textarea name="content" placeholder="Nhập nội dung "></textarea>
			</label>

			<button type="submit">
				Viết bài mơi !
			</button>

		</form>
	</div>

<?php require_once 'template/footer.php'; ?>