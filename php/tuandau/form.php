<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>status facebook thả  thính  </title>
</head>
<body>

<?php 
	if( $_SERVER["REQUEST_METHOD"]  == "POST" ){
		// echo "Cường vừa cập nhật status thả thính của anh í: <pre>" . $_POST["mood"] . "</pre>" ;
		echo "Cưòng đang cảm thấy <b>" . $_POST["mood"] . "</b>" . " bởi vì " .
		      "<pre>" . $_POST["status"] . "</pre>" ; 
	} 
?>
<form action="" method="post">
	<h1>Tâm trạng bạn thế nào :3 ? </h1>
		<textarea style="width:400px ; height:250px"  name="status"></textarea>
		<br/>
		Tâm trạng bạn như nào: <input type="text" name="mood" />
		<br/>
		<button type="submit">Cập nhật status</button>
</form>


</body>
</html>