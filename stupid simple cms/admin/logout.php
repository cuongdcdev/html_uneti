<?php 
session_start(); // mình cần dùng ( cần truy cập $_SESSION ) -> viết gọi hàm session_start()
session_destroy(); //xóa session lưu trữ thông tin đăng nhập 
header("Location: http://uneti.test/admin/login.php"); // chuyển user về trang đăng nhập ! 