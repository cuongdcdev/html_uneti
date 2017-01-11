<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>test php</title>
</head>
<body>
	<h1>hello ! this is static page ! </h1><b></b>
	sdfsjdl


	<?php 
	//khai bao biến, biến có thể là số , chuỗi , mảng , boolean ... 
		$PI = 3.14; // viết hoa được quy ước là hằng số ! 
		$a = 1996 ; // day la so 
		$b = "Vũ Văn Có" ; // đây là string 
		$c = array() ; //day la mang 

		$coMua = true; //boolean -> true / false 

	?>

<h4>asdasd </h4>
	
	<?php 
		echo  "<b>" .  $b . "</b>" . "blah blah " . (1+2)  ;
	?>

<b>blah blah </b>

<h3>hello! day la the h3 </h3>


<h4> <?php echo $b; ?> </h4>


<?php 
	//cau truc dieu khien if else 
	if( $coMua == true ){
		echo "<h1>Mưa cmnr, quên ko mang áo mưa  </h1>";
	} else{
		//else này nghĩa là CÁC trường hợp CÒN LẠI 
		echo "<h1>May vch, hôm nay mình ko mang áo mưa :3 </h1>";
	}
 ?>

<h2>day la pre </h2>
<pre>
	echo "blah blah";
	if( blah = true ){
		echo "true true ";
	}else{
		echo "false false ";
	}

</pre>

<h2>day la p </h2>
<p>
	echo "blah blah";
	if( blah = true ){
		echo "true true ";
	}else{
		echo "false false ";
	}
</p>


</body>
</html>