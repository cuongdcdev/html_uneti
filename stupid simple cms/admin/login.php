<?php 

require_once( "../inc/lib.php" );



	if( $_SERVER["REQUEST_METHOD"]  == "POST"){
			$username = $_POST["username"];
			$password = $_POST["password"];


				$sql = "SELECT * FROM users WHERE username='{$username}'  AND password='{$password}' ";
				$rs = mysqli_query( $conn , $sql );
				if( mysqli_num_rows($rs)  == 1 ){
					//cho phep user dang nhap 
					// luu thong tin user do trong _SESSION

					$_SESSION["username"] = $username;
					echo "ĐĂng nhập thành công ! ";

					//Chuyển ng dùng sang trang admin (index.php);
					header( "Location: http://uneti.test/admin" ); // sau khi đăng nhập, chuyển hướng nó sang my admin (index.php) 



				}else{
					echo "ĐĂng nhập bị sai !!! ";
				}
			
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<meta charset="utf-8"/>
</head>

<body>
<form action="" method="post" accept-charset="utf-8">
	<label>
		Nhập tên đăng nhập
		<input type="text" name="username" />
	</label>

	<label>
		Nhập mật khẩu
		<input type="password" name="password" /></label>
	<button type="submit">Đăng nhập</button>
</form>
</body>
</html>
