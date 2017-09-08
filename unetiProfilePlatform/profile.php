<?php 


if( !isset( $_GET["msv"] ) ) die("wtf?, nhập cái gì vào đi ! ");

if( isset( $_GET["msv"] )  && !is_numeric( $_GET["msv"] )  ) die( "Mày nhập hẳn hoi :| " );



	require_once("inc/simplehtmldom_1_5/simple_html_dom.php");

	// set up curl 

	$baseUrl = "http://daotao.uneti.edu.vn";

	$url = "http://daotao.uneti.edu.vn/XemDiem.aspx?MSSV=" ;

	$msv = trim($_GET["msv"]); // xoa khoang trang 2 dau 
	

	$curl = curl_init( $url . $msv );

	//setup curl 
	curl_setopt( $curl, CURLOPT_RETURNTRANSFER , true );

	//chay + tra ve 


	$resource = curl_exec( $curl ); // trong dk dep, ko mat mang 
	
	if( !$resource ) die("Mất cmn mạng rồi :(( ");

	$html = new  simple_html_dom();

	$html->load( $resource ); // lấy dc hết thông tin rồi ! 

	//check neu tra ve ko  ton tai 
	$ifExists = $html->find("center")[0];

	if( $ifExists->innertext == "MSSV không hợp lệ" ) 
			die("MSV ko ton tai :(( ");
	//

	//lay thu cai anh dai dien cua thang Gỉang: 

	$avatar = $html->find( "img.hinh-sinhvien" ); //lay anh cua No

	$ten = $html->find("div.title-group"); // lay ten thang Giang

	echo "<img src='" . $baseUrl . "/" . $avatar[0]->src . "' /> <br/>"; 




	echo "<h1>"   . explode("<br />" , $ten[0]->innertext )[1] .  "</h1>" ; // lay ten thang giang 
?>

	<div id="thong-tin">

		<div class="left">
				<?php 
					$tables = $html->find( "table.none-grid") ; // array chua table thong tin que quan + thong tin hoc tap 

				?>

				<div id="thong-tin-sv">
					<h6>Thông tin sinh viên: <?= $ten[0]->innertext ?></h6>

					<?= $tables[0]; // table thông tin cơ bản ?>
				 </div><!-- #thong-tin-sv -->


				 <br/>

				 <div id="thong-tin-hoc-tap">
				 	<h6>Thông tin học tập của: <?php echo $ten[0]->innertext ?></h6>
				 	<?= $tables[1]; ?>
				 </div><!-- #thong-tin-hoc-tap -->
		</div><!-- ben trai -->


		<div class="right">
			
			<div class="bang-diem-1">
				<?php 
					$bangDiemArray = $html->find("table.tblKetQuaHocTap");

					echo
						"<table class='table-bang-diem-1'>".

							 $bangDiemArray[0]->innertext 

						 .'</table>';


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

