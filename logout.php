<?php
session_start();

// Xóa tất cả các biến session
session_unset();

// Hủy session
session_destroy();

//Quay về trang Login
header("Location: login.php");
?>