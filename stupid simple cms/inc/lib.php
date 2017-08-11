<?php 
session_start();

// Chứa các cấu hình + functions hay dùng 

$conn = mysqli_connect( "localhost" , "root" , "root" , "uneti_stupid_cms" ); // dia chi truy cap / user name / password / ten db 

if( $conn ){
	mysqli_set_charset($conn,"utf8");
}else{
	die( "Có lỗi xảy ra khi kết nối vào csdl : " . mysqli_error( $conn ) );
}

$postsPerPage = 2; // so bai tren 1 trang 



function checkLogin(){
	global $_SESSION;
	//kiểm tra xem đã đăng nhập chưa :? 
	if( empty( $_SESSION["username"] ) ){
		header("Location: http://uneti.test/admin/login.php");
	}

}

function get_total_posts(){
	global $conn;
	$sql = "SELECT COUNT(id) AS total FROM posts";
	$rs = mysqli_query( $conn , $sql );
	$total = mysqli_fetch_array($rs, MYSQLI_ASSOC);
	return $total["total"];
}


 ?>