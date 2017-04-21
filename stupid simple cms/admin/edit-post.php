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

	<button type="submit">Cập nhật</button>
</form>