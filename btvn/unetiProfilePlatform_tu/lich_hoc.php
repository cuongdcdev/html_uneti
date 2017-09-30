<?php 
session_start();




	require_once("inc/simplehtmldom_1_5/simple_html_dom.php");// lạp file tải về

	// cài đặt curl 

	$baseUrl = "http://daotao.uneti.edu.vn";// trang web chính

	$url = "http://daotao.uneti.edu.vn/XemDiem.aspx?MSSV=" ;// url để khi nhập msv vào thì kiểm tra trên database của nhà trường

	
	$msv=$_SESSION["msv"];

	$curl = curl_init( $url . $msv );// đây là cả chuỗi khi đầy đủ cả hai cái nó sẽ hoạt động 

	//setup curl 
	curl_setopt( $curl, CURLOPT_RETURNTRANSFER , true );

	//curl_exec chay + tra ve 
	$resource = curl_exec( $curl ); // trong dk đep, ko mat mang 

	if( !$resource ) die("Mất cmn mạng rồi :(( ");// nếu mất mạng nó sẽ chạy hàm if

	$html = new  simple_html_dom();

	$html->load( $resource ); // lấy dc hết thông tin rồi ! 




	//$ifExists = $html->find("center")[0];//  nấy thông tin trong center thứ nhất trang web chủ
	//if( $ifExists->innertext == "MSSV không hợp lệ" )//ý nghĩa câu lệnh là gì 
			//die("MSV ko ton tai :(( ");
// sao chỗ này nó lại cho là $ifExists->innertext == "MSSV không hợp lệ"
			




// bắt đầu hàm xem lịch học


	
	// cài đặt curl 

	$baseUrl = "http://daotao.uneti.edu.vn";// trang web chính

	$url1 = "http://daotao.uneti.edu.vn/XemLichHoc.aspx?MSSV=" ;// url để khi nhập msv vào thì kiểm tra trên database của nhà trường

	


	$curl1 = curl_init( $url1 . $msv );// đây là cả chuỗi khi đầy đủ cả hai cái nó sẽ hoạt động 

	//setup curl 
	curl_setopt( $curl1, CURLOPT_RETURNTRANSFER , true );

	//curl_exec chay + tra ve 
	$resource1 = curl_exec( $curl1 ); // trong dk đep, ko mat mang 

	if( !$resource1 ) die("Mất cmn mạng rồi :(( ");// nếu mất mạng nó sẽ chạy hàm if

	$html1 = new  simple_html_dom();

	$html1->load( $resource1 ); // lấy dc hết thông tin rồi ! 

?>
<!DOCTYPE html>
<html>
<head>
	<title>lịch học của sinh viên</title>
	<meta charset="utf-8">
	<style >
	*{
		padding: 0px;
		margin: 0px;
	}
body{
	background-color: black;

}
h2{
	margin-top: 10px;
	color:white;
}
		#menu{
	border-bottom:2px solid red;
	background-color: lightblue;
	border-radius: 4px;
	margin: auto;
	height:50px;
	width: 100%;
	top:0;
	position: fixed;
}
#menu ul li{
	list-style-type: none;
	float: left;
	width: 100px;
	line-height:50px; 
	text-align: center;
}
#menu ul li a{
	text-decoration: none;
	color: white;

	font-weight: bold;
	font-size: 20px;

}
#menu li:hover{
	background-color: gray;
	border-bottom: 3px solid white;
	border-radius: 4px;

}
#menu li a:hover{
color: black;
	}
#ten{
	height: 60px;
	margin: auto;
	width: 400px;
	background-color: lightblue;
	border-radius: 4px;
	text-align: center;line-height: 60px;
	margin-top: 40px;
}
#lichhoc{

	width: 70%;
	border: 1px solid blue;
	border-radius: 4px;
	margin: auto;
	margin-top: 10px;
	background-color: lightgray;
}


/*tạo mênu đứng im

#menu-an{
margin-left: 300px;
display:none;
top:0;
position:fixed;
	width: 800px;
	
	height: 50px;
	
	
	text-align: center;
	background-color: lightblue;
	border-radius: 4px;
	border-bottom:2px solid red; 
	

}
#menu-an ul li{
position:relative;
	color:white;
	list-style-type: none;
	float: left;
	width: 100px;
	line-height: 50px;

}

#menu-an ul li a{
display:block;	
	color:white;
	font-weight: bold;
	font-size: 20px;
	text-decoration: none;
}
*/

	</style>
</head>
<body>

<div id="menu">
	<ul>
<li style="margin-left: 20px; margin-right: 30px;"><a href="serach_demo.php"> Search</a></li>
<li  style="margin-left: 20px; margin-right: 30px;"><a href="lich_hoc.php">Lịch Học</a></li>
<li  style="margin-left: 20px; margin-right: 30px;"><a href="tk_diem_demo.php">Điểm</a></li>

	</ul>
</div>

<!--menu đứng im khi kéo chuột

<div id="menu-an">
	<ul>
<li style="margin-left: 20px; margin-right: 30px;"><a href="serach_demo.php"> Search</a></li>
<li  style="margin-left: 20px; margin-right: 30px;"><a href="lich_hoc.php">Lịch Học</a></li>
<li  style="margin-left: 20px; margin-right: 30px;"><a href="tk_diem_demo.php">Điểm</a></li>

	</ul>
</div>

<!-- kết thúc menu đứng im khi kéo chuột-->-->



<div id="ten">
	<?php
	$ten = $html->find("div.title-group"); // lay ten thang Giang

// hàm explode nó sẽ tách cái mảng"<br /> nguyenn thanh tú" này thành 2 phần tử explode("<br />" , $ten[0]->innertext ) và nấy cái thứ hai là cái tên trong ptu đó [1]
			echo "<h2>"   . explode("<br />" , $ten[0]->innertext )[1] .  "</h2>" ; // lay ten thang giang 
			// náy chữ thhì dùng cái innertext
			// náy ảnh  thhì dùng cái src và sd thẻ html img
			// tại sao ở đây lại dùng  hàm explode để nấy tên vậy
			// sd explode  để tách cái mảng tên thành hai phần tử bắt đầu từ thẻ br và nấy phần tử ở vtri thứ hai là số 1
	?>
</div>
<h2 style="text-align: center;font-weight: italic;">Kết Quả Tra Cứu lịch Học </h2>


<h3 style="text-align: center;color:white; margin-top: 5px;font-weight: italic;">lịch Học Của Sinh Viên</h3>
<div id="lichhoc">
	<?php
// bảng điểm
$lichhoc = $html1->find("table#detailTbl");

					echo"<table id='bang'>"
					.$lichhoc[0]->innertext 
					."</table>";

?>

</div>
<div style="border: 1px solid black; height:180px; width: 940px; 
 text-align: center;margin: auto;  color:black;opacity: 0.6; background-color: white;margin-top: 10px; border-radius: 4px;">
<p style="margin-top: 60px;">Copyright © 2013 Trường Đại học Kinh tế Kỹ thuật Công nghiệp - Phòng Đào Tạo<br>
Địa chỉ: 456-Minh Khai, Hà Nội - Fax:(04)8623938<br>
Điện thoại: (04)8621504 - Email: uneti@vnn.vn<br>
Thiết kế bởi  EPMT</p><br>
</div>
</body>
</html>