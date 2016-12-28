<?php 
	session_start();
	//array key=> value , eg : 

// $arr = array(  
// 		"title" => "day la tieu de " , 
// 		"content" => "day la noi dung bai viet "
// );

// echo $arr["content"];


	if( !isset($_SESSION["post_array"]) ){
		$_SESSION["post_array"] = array();
	}
	
		var_dump($_SESSION);// in ra toan bo nhung gia tri nam trong mang $_SESSION
	

		if( $_SERVER["REQUEST_METHOD"] == "POST" ){
			//tao 1 mang con chứa 2 key  title + content 
			$single_post = array(
					"title" => $_POST["title"],
					"content" => $_POST["content"]
			);

			$_SESSION["post_array"][] = $single_post;
			echo "<script>alert(\"Viết bài thành công !\")</script>";
		}
?>



<form  method="post">
	nhập tiêu đề: <input type="text" name="title" />

	<br/>

	Nhập nội dung: <textarea name="content" style="min-width: 800px;min-height:500px "></textarea>

	<button type="submit">Viết bài ! </button>
</form>