<?php
	require_once("../inc/lib.php");
	checkLogin();
	if( $_SERVER["REQUEST_METHOD"] == "POST" ){
		
		$username = $_POST["username"];
		$password1 = $_POST["password1"];
		$password2 =  $_POST["password2"];
		$info  = $_POST["info"];
		$arr_erros = array();
		if( empty( $username ) ){
			$arr_erros[] = "Tên ko dc trống ! ";
		}
		if( empty($password1 ) || empty( $password2 ) ){
			$arr_erros[] = "Mật khẩu ko đc trống";
		}
		if( $password1 != $password2 ){
			$arr_erros[] = "Mật khẩu nhập ko khớp ! ";
		}
		if( empty($arr_erros) ){
			//kiem tra trong db xem ten user đã tồn ạti chưa :?
			$check = "SELECT id FROM users WHERE username='{$username}' ";

			if( mysqli_num_rows(mysqli_query($conn, $check)) > 0 ){
				echo "tên tài khoản đã tồn tại !, vui lòng chọn tên khác ! ";
			}else{
			//
				$sql = "INSERT INTO users( username , password , info) VALUES ( '{$username}' , '{$password1}' , '{$info}' )" ;
				$rs = mysqli_query( $conn , $sql );
				if( mysqli_affected_rows($conn) >  0 ){
					echo "Thêm mới thành công rồi ! ";
				}else{
					echo "Có lỗi xảy ra ! " ;
				}
			}
		}else{
			foreach( $arr_erros as $err){
				echo "-" . $err . "<br/>";
			};
		}
	}
?>
<meta charset="utf-8"/>
<h2>Thêm người dùng mới !</h2>
<form  method="post" accept-charset="utf-8">
	<label> Tên đăng nhập
		<input type="text" name="username">
	</label>
	<label> Mật khẩu
		<input type="password" name="password1" />
	</label>
	<label> Nhập lại mật khẩu
		<input type="password" name="password2"/>
	</label>
	<label>
		Nhập thông tin thêm, nếu có
		<textarea name="info"></textarea>
	</label>
	<button type="submit">Tạo mới !  </button>
</form>