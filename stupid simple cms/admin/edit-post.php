<?php 
	require_once '../inc/lib.php';

	$id = $_GET["id"];


	$sql = "SELECT * FROM posts WHERE id = {$id}";

	$query = mysqli_query( $conn , $sql );

	$rs = mysqli_fetch_array( $query , MYSQLI_ASSOC );

	if( empty( $rs ) ){
		echo "Bài viết không tại ";
		return;
	}

	if( $_SERVER["REQUEST_METHOD"] == "POST" ){
		$title = $_POST["title"];
		$content = $_POST["content"];
		$excerpt = $_POST["excerpt"];
		$cat_id = $_POST["category"];
		$post_id = $rs["id"];

		$sql = "UPDATE posts SET title='{$title}' , excerpt='{$excerpt}' 
			   , content='{$content}' , cat_id = '{$cat_id}'  WHERE id= '{$post_id}' LIMIT 1 ";

		if( mysqli_query($conn, $sql) ){

		}

	}

?>


<h1>Chỉnh sửa bài viết : <?php $rs["title"] ?></h1>

<form action="" method="post" accept-charset="utf-8">
	<labe> Tiêu đề : 
		<input type="text" name="title" value="<?php echo $rs['title'] ?>">
	</labe>

	<label>
		Tóm tắt
		<textarea name="excerpt"><?php echo $rs["excerpt"];?></textarea>
	</label>

	<label>
		Nội dung
		<textarea name="content"><?php echo $rs["content"];?></textarea>
	</label>

		<label>
			<select name="category">
				<option> Xin chọn danh mục  </option>
				<?php


					$sql = "SELECT id,title FROM category";
					$rs2 = mysqli_query($conn, $sql);

					while( $row = mysqli_fetch_array($rs2, MYSQLI_ASSOC ) ): ?>
			 		<option <?php if( $row["id"] == $rs["cat_id"] ) {echo "selected"; }; ?> 

			 		value="<?php echo $row['id']; ?>" > <?php echo $row["title"]; ?> </option>
			 	
			 	<?php endwhile ; ?>
			</select>
	</label>

	<button type="submit">Cập nhật</button>
</form>