<?php 
	require_once( "../inc/lib.php" );

	if(  isset($_POST["delete"])  ){
		$id = $_POST["delete"];

		$sql = "DELETE FROM posts WHERE id = {$id}";

		$rs = mysqli_query( $conn , $sql );

		if( $rs ){
			echo "Xóa thành công ! ";
		}else{
			echo "Xóa thất bại ! ";
		}
	}

?>



<body>
	<div id="page-index">
		
		<h1>Trang quản trị admin ! </h1>

		<a href="create-post.php">Tạo bài viết mới </a>


	<div id="content">
		<table>
			<caption>Quản lí bài viết</caption>
			<thead>
				<tr>
					<th>stt</th>
					<th>Tên</th>
					<th>Tóm tắt</th>
					<th>user_id</th>
					<th>ngày tạo</th>
					<th>Tùy chọn</th>
				</tr>
			</thead>

			<tbody>
				<?php 
					$query = "SELECT * FROM posts";
					$rs = mysqli_query( $conn , $query );
					while( $row = mysqli_fetch_array( $rs , MYSQLI_ASSOC  ) ){
				?>
				<tr>
					<td>1</td>
					<td><?php echo $row["id"];?></td>
					<td><?php echo $row["title"]; ?> </td>
					<td><?php echo $row["excerpt"];?></td>
					<td><?php echo $row["create_date"]; ?> </td>


					<td><a href="edit-post.php?id=<?php echo $row['id']; ?>">Edit</a>/

						<form method="post">
							<input type="hidden" name="delete" value="<?php echo $row['id'] ?>" />
							<button type="submit" onclick="return confirm('bạn chắc chắn muốn xóa ? ');" >delete</button>
						</form>

					</td>
				</tr>

				<?php } ?>
			</tbody>
		</table>

</div><!-- #content -->


	</div>
<?php require_once 'template/footer.php'; ?>