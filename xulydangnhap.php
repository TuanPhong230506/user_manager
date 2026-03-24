<?php
session_start();
include 'config.php';
if (isset ($_POST['login'])){
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    // Truy vấn kiểm tra username và password
    $sql = "SELECT * FROM user WHERE Username = '$Username' AND Password = '$Password'";
    $result = mysqli_query($conn, $sql);

    // Nếu tìm thấy 1 dòng kết quả trùng khớp
    if (mysqli_num_rows($result) == 1){
        $user = mysqli_fetch_assoc($result);

        // Lưu thông tin vào Session
        $_SESSION['Username'] = $user['Username'];
        $_SESSION['Role'] = $user['Role'];

        // Logic điều hướng (Redirect)
        if ($user['Role'] == 1){
            header("Location: admin.php"); //Chuyển Sang trang admin
        }else{
            header("Location: index.php");//Chuyển sang trang User
        }
    }else{
        echo "<p style ='color:red'>Sai Tên Đăng Nhập Hoặc Mật Khẩu!</p>";
    }
}
?>