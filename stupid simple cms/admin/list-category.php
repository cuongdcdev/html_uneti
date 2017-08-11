<?php 
	require_once( "../inc/lib.php" );
	checkLogin();

	
	if(  isset($_POST["delete"])  ){
		$id = $_POST["delete"];

		$sql = "DELETE FROM category WHERE id = {$id}";

		$rs = mysqli_query( $conn , $sql );

		if( $rs ){
			echo "Xóa thành công ! ";
		}else{
			echo "Xóa thất bại ! ";
		}
	}

?>


<style>
	table tr td{
		border:1px solid black;
		border-collapse:  collapse;
	}
</style>


<body>
	<div id="page-index">
		
		<h1>Danh sách danh mục </h1>

		<?php require_once("template/menu.php") ;?>

	<div id="content">
		<table>
			<caption>Quản lí bài viết</caption>
			<thead>
				<tr>
					<th>Tên</th>
					<th>Tóm tắt</th>
				</tr>
			</thead>

			<tbody>
				<?php 
					$query = "SELECT * FROM category";
					$rs = mysqli_query( $conn , $query );
					while( $row = mysqli_fetch_array( $rs , MYSQLI_ASSOC  ) ){
				?>
				<tr>
					<td><?php echo $row["title"]; ?> </td>
					<td><?php echo $row["excerpt"];?></td>


					<td><a href="edit-category.php?id=<?php echo $row['id']; ?>">Edit</a>/

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