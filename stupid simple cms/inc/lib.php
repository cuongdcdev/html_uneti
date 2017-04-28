<?php 

// Chứa các cấu hình + functions hay dùng 

$conn = mysqli_connect( "localhost" , "root" , "root" , "uneti_stupid_cms" ); // dia chi truy cap / user name / password / ten db 

if( $conn ){
	mysqli_set_charset($conn,"utf8");
}else{
	die( "Có lỗi xảy ra khi kết nối vào csdl : " . mysqli_error( $conn ) );
}

	

 ?>