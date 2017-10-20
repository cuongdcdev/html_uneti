<?php 

require_once("ThanhVien.php");
	if( $_SERVER["REQUEST_METHOD"] == "POST" ){

		$message = "";
		$thanhVien = new ThanhVien();
		$thanhVien->setConnection( "localhost" , "root" , "root" ,"uneti_dev" );

		if( $_POST["action"] == "insert" ){
			$sv = new ThanhVien( false , $_POST["name"] , $_POST["info"] , $_POST["ma_lop"]  );
			if( $thanhVien->insert($sv) ){
				$message = "Thêm thành công ";
			}else{
				$message = "Có lỗi cmnr: " . $thanhVien->getMysqlError();
			}
		}//insert

		if( $_POST["action"] == "search" ){

			$ketQuaTimKiemTheoTen = $thanhVien->findByName( $_POST["name"] );
			if( empty($ketQuaTimKiemTheoTen) ){
				$message = "Ko tìm thấy kết quả phù hợp với tên là: " . $_POST["name"];
			}



		}//search
	}
?>


<?php 
	if( !empty( $message ) ):
?>

<div style="background-color:blue; padding:20px; color:white; text-align: center; width:80%; margin:0 auto; display: block">
	
	<?php echo $message ; ?>
</div>

<?php endif?>

<legend>
Thêm sinh viên: 	

<form method="POST">
	<input type="text" name="name" placeholder="Nhập tên vào đây : " />
	<textarea name="info" placeholder="nhập info"></textarea>
	<input type="number" value="1" name="ma_lop" placeholder="nhậpm mã lớp" />
	<button type="submit">them</button>
	<input type="hidden" name="action" value="insert" />
</form>

</legend>



<legend>
	
	Tìm kiếm sinh viên theo tên:

	<form method="POST"> 
		<input type="text" name="name" placeholder="nhập tên vào đây" />
		<button type="submit">Tìm kiếm</button>
		<input type="hidden" name="action" value="search" />
    </form>
</legend>


<?php if( !empty( $ketQuaTimKiemTheoTen ) ) : ?>

<div class="rs">
	<?php
		foreach( $ketQuaTimKiemTheoTen as $sv ){
			echo "id: " . $sv->id . " | name : " . $sv->name . " | info: " .  $sv->info . "<br/>";
		}
	 ?>
</div>

<?php endif;?>
