<?php 
	require("Connection.php");
	require("XeMay.php");
	require ("ThanhVien.php");

	$conn = new Connection( "localhost" , "root" , "root" , "uneti_dev" );
	$thanhVien = new ThanhVien();
	
	$thanhVien->setConnection( $conn->getConnection() );
	//tao 1 thanh vien moi 

	// $tu = new ThanhVien( false, "tu" , "máy hỏng" , "2" );

	// if( $thanhVien->insert($tu) ){
	// 	echo "tao thanh cong sinh vien: " . $tu->name;

	// }else{
	// 	echo "loi khi tao thanh vien: " . $tu->name . " ma loi: " .$thanhVien->getMysqlError();
	// }

	// $allSinhVien = $thanhVien->getAll();


	// foreach( $allSinhVien as $sv ){
	// 	echo "name:" . $sv["name"]  . "<br/>";
	// 	echo "info:" . $sv["info"]  . "<br/>";
	// 	echo "<hr/>";
	// }


	$minh = new ThanhVien( false, "Minh" , "thằng minh thứ 2 " , "2" );
	$thanhVien->insert($minh);

	echo "Danh sách tất cả những thằng tên là minh: ";

	$rs = $thanhVien->findByName("minh");

	foreach( $rs as $sinhVien ){
		echo "id: " .$sinhVien->id .  "| name: " . $sinhVien->name . " | info: " . $sinhVien->info . "<br/>";
	}

	echo 'xoa toan bo minh:';
	if( $thanhVien->deleteAllByName("minh") ){
		echo "xoa ok ! ";
	}else{
		echo "sai cmnr, " . $thanhVien->getMysqlError();
	}