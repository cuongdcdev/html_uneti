<?php 
	$abc = "99Hello PHP "; // string 
	$b = 123 ; //number
	$c = 12312312312312312 ; // number

	$arr = array(
		1,2,6,7,"abc" , "def" 
	);


	// echo $arr[4] . " --- " . $arr[5];

	$isTrue = false; //boolean -> logic true or false 


//cau truc dieu khien if else 

	// if( (5+3) > 10  ){
	// 	echo "its true !! ";
	// }else{
	// 	echo "Cac truong hop còn lại ";
	// }

//cau truc lap for 

	// for( $i = 0 ;$i < 5 ; $i++  ){
	// 	echo $i . "-" ;
	// }

	// while 

	// $i = 5;
	// while( $i > 0 ){
	// 	// echo "$i hien tai : " . $i . "<br/>";
	// 	echo "\$i hien tai la : {$i} <br/>";
	// 	$i--;
	// }

	if( $_SERVER["REQUEST_METHOD"] == "POST" ){

		$age = $_POST["age"];
		if( is_numeric( $age )  ){
			if( $age >= 10 && $age <= 70  ){
				if( $age >= 18 ){
					echo "Bạn đã đủ 18 tuổi";
					echo "<br/>";
					echo "Đây là link của bạn : ";
					echo "<br/>";

					while( $age > 0 ){
						// echo "<a href='http://google.com/{$age}'>Video #{$age}</a> <br/>";
							echo "<a href='http://google.com/" . $age . "'>Video #" . $age . "</a></br/>"; 
						$age--;
					}
				}else{
						echo "Bạn chưa đủ tuổi vị thành niên";
					}


				echo "current age : " . $age ;
			}else{
				if( $age < 18 ){
					echo "Bạn nhập tuổi ko hợp lệ !, mày đợi thêm : " .(18 - $age) ."  năm nữa !! ";
				}else{
					echo "Gìa rồi, dưỡng sức đi!";
				}
			}
		}else{
			echo "Ko phải số !!! , Nhập hẳn hoi !!! ";
		}





	}

?>

<form method="post">
	<p>FBI Warning: bằng cách nhập tuổi vào, bạn đồng ý với yêu cầu của chúng tôi </p>
	Nhập tuổi : <input type="text" name="age"/>
	<br/>
	<input type="submit" value="Kiểm tra"/>
</form>