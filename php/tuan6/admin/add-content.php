<?php 
	session_start();


	if( !empty( $_SESSION )){
		if( $_SERVER["REQUEST_METHOD"] == "POST" ){
			$_SESSION["title"] = $_POST["title"];
			$_SESSION["content"] = $_POST["content"];	
			echo "<script>alert(\"Viết bài thành công !\")</script>";
		}
	};
?>



<form  method="post">
nhập tiêu đề: <input type="text" name="title" />

<br/>

Nhập nội dung: <textarea name="content" style="min-width: 800px;min-height:500px "></textarea>

<button type="submit">Viết bài ! </button>
</form>