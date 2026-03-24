<?php
session_start();

// Xóa tất cả các biến session
session_unset();

// Hủy session
session_destroy();

//Quay về trang Login Đitj mẹ Tuấn Phong 
header("Location: login.php");
?>