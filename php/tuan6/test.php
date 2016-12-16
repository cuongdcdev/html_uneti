<?php 

	if( !empty($_GET["name"]) ){
		$name = $_GET["name"];
		//neu cai $_GET["name"] khong trong -> thi tien hanh in ra ! 
		echo  "Xin chao : "   . $name;
	}


	// if( !empty($_POST) ){ // bien POST ko trong 

	// }


	if( $_SERVER["REQUEST_METHOD"] == "POST" ){ // nếu phương thức yêu cầu của client là post 
		if( !empty($_POST["username"] && !empty( $_POST["password"] )  ) ){
			echo "<br/> tên tài khoản : " . $_POST["username"];
			echo "<br/>" . "Mật khẩu: " . $_POST["password"];
		}else{
			echo "Vui lòng nhập đủ ! ";
		}	
	}
	


 ?>


<h2>Ví dụ GET: </h2>
 <form method="get">
 	 <input type="text" name="name" />
 	<input type="submit" value="gui di ! " />
 </form>

 <h2>Ví dụ POST: </h2>
 
 <form method="post">
 nhập username : <input type="text" name="username" />
 nhập password : <input type="password" name="password" />
 <button type="submit">đăng cmn nhập ! </button>
 </form>