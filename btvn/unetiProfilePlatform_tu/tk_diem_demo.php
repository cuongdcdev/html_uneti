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
			
?>
<html>
  <head>
    <title>kết quả tìm kiếm của sinh viên</title>
    <meta charset="utf-8">
<style>
*{margin: 0px;
padding: 0px;
}

body{
	background-color: lightgray;
	
}
#menu{
	position:fixed;
	background-color: lightblue;
	border-radius: 4px;
	margin: auto;
	height:50px;
	width: 100%;
	top:0;
	border-bottom: 2px solid red;
}
#menu ul li{
	list-style-type: none;
	float: left;
	width: 100px;
	text-align: center;
	line-height:50px; 
}
#menu ul li a{
	text-decoration: none;
	color: white;

	font-weight: bold;
	font-size: 20px;

}
#menu li:hover{
	background-color: gray;
	border-bottom: 2px solid green;
	border-radius: 4px;
	transition: 2S all;
}


#ten{
	background-color: lightblue;
	border-radius: 4px;
	margin: auto;
	height:60px;
	width: 500px;
	text-align: center;
	line-height: 60px;
	color:white;
	border-radius: 4px;
	margin-top: 20px;
	margin-top: 60px;

}
#diem{
	overflow:scroll;
	height: 400px;
	width: 70%;
	border: 1px solid lightblue;
	border-radius: 4px;
	margin: auto;
	margin-top: 10px;
}
#abc{
	margin-top: 2px;
	background-color: lightblue;
	color:white;
}
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
<div id="ten">
		<?php
	$ten = $html->find("div.title-group"); // lay ten thang Giang
?>

<?php
// hàm explode nó sẽ tách cái mảng"<br /> nguyenn thanh tú" này thành 2 phần tử explode("<br />" , $ten[0]->innertext ) và nấy cái thứ hai là cái tên trong ptu đó [1]
			echo "<h2>"   . explode("<br />" , $ten[0]->innertext )[1] .  "</h2>" ; // lay ten thang giang 
			// náy chữ thhì dùng cái innertext
			// náy ảnh  thhì dùng cái src và sd thẻ html img
			// tại sao ở đây lại dùng  hàm explode để nấy tên vậy
			// sd explode  để tách cái mảng tên thành hai phần tử bắt đầu từ thẻ br và nấy phần tử ở vtri thứ hai là số 1
	?>

</div>
<h2 style="text-align: center; margin-top: 8px;">Kết Quả Tra Cứu Điểm</h2>
<h3 style="text-align: center;margin-top: 5px;"> bảng điểm cuả sinh viên</h3>

<div id="diem">
<?php
// bảng điểm
$bangDiemArray = $html->find("table.tblKetQuaHocTap");

					echo"<table class='table-bang-diem-1'>"
					.$bangDiemArray[0]->innertext  
					.'</table>';
?>
<div id="abc">
<?php // kết quả dứoi cùng của bảng điểm
					 echo "<table class='table-bang-diem-2'>"
					 		. $bangDiemArray[1]->innertext 
					 	. "</table>";
				?></div>

</div>
<div style="height:140px; width: 940px; 
 text-align: center;margin: auto;  color:black; background-color: white; border-radius: 4px; margin-top: 8px;">
<p style="padding-top: 30px;">Copyright © 2013 Trường Đại học Kinh tế Kỹ thuật Công nghiệp - Phòng Đào Tạo<br>
Địa chỉ: 456-Minh Khai, Hà Nội - Fax:(04)8623938<br>
Điện thoại: (04)8621504 - Email: uneti@vnn.vn<br>
Thiết kế bởi  EPMT</p><br>
</div>
</body>
</html>