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
			

	

	$ten = $html->find("div.title-group"); // lay ten thang Giang

// hàm explode nó sẽ tách cái mảng"<br /> nguyenn thanh tú" này thành 2 phần tử explode("<br />" , $ten[0]->innertext ) và nấy cái thứ hai là cái tên trong ptu đó [1]
			echo "<h1>"   . explode("<br />" , $ten[0]->innertext )[1] .  "</h1>" ; // lay ten thang giang 
			// náy chữ thhì dùng cái innertext
			// náy ảnh  thhì dùng cái src và sd thẻ html img
			// tại sao ở đây lại dùng  hàm explode để nấy tên vậy
			// sd explode  để tách cái mảng tên thành hai phần tử bắt đầu từ thẻ br và nấy phần tử ở vtri thứ hai là số 1
	

	//lay thu cai anh dai dien cua thang Gỉang: 
// vào trong  trang web để soi xem nó để  ở chỗ nào và để trong thẻ html nào
	$avatar = $html->find( "img.hinh-sinhvien" ); //lay anh cua No

// cái src nấy trong cái  $baseUrl chứa đường dẫn ảnh và tiếp tục nấy cái ảnh đầu tiên trên trang web đó 
	// src là đi avò cái dg dẫn đó trong trang web đó nấy cái ảnh đầu tiên 
			echo "<img src='   " . $baseUrl . "/" . $avatar[0]->src . "    ' /> <br/>"; 
				// $avatar[0] nấy 1 cái đầu tiên bởi vì nó là mảng

	








?>
<html>
	<head>
		<title>kết quả tra cứu của học sinh sinh viên </title>
		<meta charset="utf-8">
	</head>

	<body>

	<div id="thong-tin">

		<div class="left">
<!-- viết php ở các div  để xuất ra kết quả tìm kiếm-->
				<?php 
				// tao ra biến $tables để xem table nó để đâu 
					$tables = $html->find("table.none-grid") ; ?><!--array chua table thong tin que quan + thong tin hoc tap -->

				

				<div id="thong-tin-sv">
					<h6>Thông tin sinh viên:
					 <?= explode("<br />" , $ten[0]->innertext )[1]; ?> 
					 </h6>
					 <?= $tables[0]; ?><!-- table thông tin cơ bản
					 // table nấy cái thứ nhất -->
				 </div><!-- #thong-tin-sv -->

<!-- mảng có hai phần tử tables trong class="none-grid"  cái thông tin sv nấy phần tử đầu tiên 
còn cái thông tin học tập của sv là nấy ptu thứ 2 
sau mỗi cía đó ta cho cái tên ra đây 1 lần  -->
				 <br/>

				 <div id="thong-tin-hoc-tap">
				 	<h6>Thông tin học tập của: <?= explode("<br />" , $ten[0]->innertext )[1]; ?> 
				 	</h6> <!-- đây là code ko tách mảng thành hai phần tử nê nó nấy hết ra <?php echo $ten[0]->innertext ?>-->
				 	<?= $tables[1]; ?> <!-- table nấy cái thứ hai-->
				 </div><!-- #thong-tin-hoc-tap -->
		</div><!-- ben trai -->


		<div class="right">
			
			<div class="bang-diem-1">
				<?php 
					$bangDiemArray = $html->find("table.tblKetQuaHocTap");

					echo"<table class='table-bang-diem-1'>"
					.$bangDiemArray[0]->innertext  
					.'</table>';
// cái bảng điểm này cũng có 2 phần tử cái ở trrên là nấy cái tiêu đề là ptu thứ nhất 
					//còn cái dưới là nấy ptu thứ 2 
					// ttất cả đều nấy phannàtử trong cái $bangDiemArray = $html->find("table.tblKetQuaHocTap"); cụ thể hơn là trong tblKetQuaHocTap của web trường

				?>
			</div>

			<div class="bang-diem-2">
				<?php 
					 echo "<table class='table-bang-diem-2'>"
					 		. $bangDiemArray[1]->innertext 
					 	. "</table>";
				?>
			</div>

		</div><!-- ben-phai -->

	</div><!-- #thong-tin -->
	</body>
</html>
