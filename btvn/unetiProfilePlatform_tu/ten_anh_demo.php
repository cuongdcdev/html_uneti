<?php 
session_start();

if( !isset( $_GET["msv"] ) ) die("wtf?, nhập cái gì vào đi ! ");// khi ng dùng chưa nhập gì thì nó chạy cái này


if( isset( $_GET["msv"] )  && !is_numeric( $_GET["msv"] )  ) die( "Mày nhập hẳn hoi :| " );//nhập đúng msvnhưng ko phải  số 

//  !is_numeric kiểm tra nếu ko pahỉ số thì die ko load nữa


	require_once("inc/simplehtmldom_1_5/simple_html_dom.php");// lạp file tải về

	// cài đặt curl 

	$baseUrl = "http://daotao.uneti.edu.vn";// trang web chính

	$url = "http://daotao.uneti.edu.vn/XemDiem.aspx?MSSV=" ;// url để khi nhập msv vào thì kiểm tra trên database của nhà trường

	$msv = trim($_GET["msv"]); // hàm trim xoa khoang trang 2 dau 
	$_SESSION["msv"]=$msv;

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
    <title>kết quả tìm kiếm thông tin của sinh viên</title>
    <meta charset="utf-8">
<style type="text/css">
*{margin: 0px;
padding: 0px;
}

body{
	background-color: lightgray;
	
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


}
#anh{
	
	
	width: 600px;
	margin:auto;
	margin-top: 10px;
}
#anh img{
	margin-left: 173px;
	margin-top: 10px;
	border-radius: 4px;
	

}

#thongtinsinhvien{
	margin: auto;
	height: 250px;
	width: 500px;
	border-radius: 4px;
	background-color: white;
	padding-left: 60px; 
	padding-top: 50px;

}

#thongtinhoctap{
	margin: auto;
	height: 250px;
	width: 500px;
	border-radius: 4px;
	background-color: white;
	padding-left: 60px; 
	padding-top: 50px;

}
#cuoi{
	margin: auto;
	height: 80px;
	width: 600px;
	text-align: center;
	margin-top: 10px;
	border-radius: 4px;
	background-color: lightblue;
}
#cuoi p{
	padding-top: 20px;
}

#menu{
position: fixed;
top:0;
	background-color: lightblue;
	border-radius: 4px;
	margin: auto;
	height:50px;
	width: 100%;
	border-bottom: 2px solid red;
	
border-radius: 4px;
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
#menu ul li:hover{
	transition: 2s ease all;
	background-color: gray;
	border-bottom: 2px solid white;
	border-radius: 4px;
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

<h1 id="kq" style="text-align: center; margin-top: 55px;">Kết Quả Tra Cứu</h1>
<h2 style="text-align: center; margin-top: 6px;">Thông Tin Sinh Viên </h2>

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
<div id="anh">
<h3>1. Ảnh của sinh viên</h3>
<?php
	//lay thu cai anh dai dien cua thang Gỉang: 
// vào trong  trang web để soi xem nó để  ở chỗ nào và để trong thẻ html nào
	$avatar = $html->find( "img.hinh-sinhvien" ); //lay anh cua No

// cái src nấy trong cái  $baseUrl chứa đường dẫn ảnh và tiếp tục nấy cái ảnh đầu tiên trên trang web đó 
	// src là đi avò cái dg dẫn đó trong trang web đó nấy cái ảnh đầu tiên 
			echo "<img src='   " . $baseUrl . "/" . $avatar[0]->src . "    ' /> <br/>"; 
				// $avatar[0] nấy 1 cái đầu tiên bởi vì nó là mảng
			?>
</div>

<h3 style="margin-left: 360px;">2. Thông tin sinh viên</h3>

<div id="thongtinsinhvien">
	<?php 
				// tao ra biến $tables để xem table nó để đâu 
					$tables = $html->find("table.none-grid") ; ?><!--array chua table thong tin que quan + thong tin hoc tap -->

					 Họ tên sinh viên:<p style="font-weight: bold;"><?= explode("<br />" , $ten[0]->innertext )[1]; ?> </p>
					 <br>
					 
					 <?= $tables[0]; ?><!-- table thông tin cơ bản
					 // table nấy cái thứ nhất -->
</div>


<h3 style="margin-left: 360px; margin-top: 20px;">3. Thông tin học tập</h3>
<div id="thongtinhoctap">

	<?= explode("<br />" , $ten[0]->innertext )[1]; ?> 
					 <!-- đây là code ko tách mảng thành hai phần tử nê nó nấy hết ra <?php echo $ten[0]->innertext ?>-->
				 	<?= $tables[1]; ?> <!-- table-->

</div>


<!--<div id="cuoi">
	 <p >Copyright © 2013 Trường Đại học Kinh tế Kỹ thuật Công nghiệp 
<br>
Thiết kế bởi  <b><u><i>NGUYỄN THANH TÚ</i></u></b></p>
</div>-->
<div style=" height:140px; width: 940px; 
 text-align: center;margin: auto;  color:black; background-color: white;margin-top: 10px; border-radius: 4px;background-color: lightblue; opacity: 0.5;">
<p style="padding-top: 50px;">Copyright © 2013 Trường Đại học Kinh tế Kỹ thuật Công nghiệp - Phòng Đào Tạo<br>
Địa chỉ: 456-Minh Khai, Hà Nội - Fax:(04)8623938<br>
Điện thoại: (04)8621504 - Email: uneti@vnn.vn<br>
Thiết kế bởi  EPMT</p><br>
</div>
</body>
</html>