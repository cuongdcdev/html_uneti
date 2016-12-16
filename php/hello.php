

<?php 

	// cau truc lap + dieu khien 
	
	$age = "trẻ con" ;

// // if else 
// 	if( $age < 18 ){
// 		echo " bạn không đủ 18 tuổi để xem phim này !  ";
// 	}else{
// 		echo " >18 tuổi,cơ mà đưa cmt đây !  ";
// 	}

	//  switch case


	switch( $age ){
		case 10:
			echo "bạn 10 tuổi";
			break;

		case 18:
			echo "bạn 18 tuổi !";
			break;

		case 20:
			echo "bạn đã 20 rồi !";
			break;

		case "trẻ con";
			echo "Chào bé ! ";
			break;

		default:
			echo "đây là trường hợp mặc định !";
	}
?>

