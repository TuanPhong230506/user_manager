<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Quản Trị</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php
session_start();
//Kiểm Tra: Nếu Chưa Đăng Nhập hoặc Role Không Phải Là 1
if (!isset($_SESSION['Username'])|| $_SESSION['Role'] !=1){
    header("Location: login.php");
    exit();
}
include 'config.php';
$sql = "SELECT * FROM user";
$result = mysqli_query($conn, $sql);

?>
<body>
    <div class="admin">
        <h1>Trang Quản Trị (Admin)</h1>
        <div class ="header">Header
            <p>Xin Chào, <strong><?php echo $_SESSION['Username']; ?></strong>! | <a href="logout.php">Đăng Xuất</a></p>
            <!--Link thêm user-->
            <a href="create.php">Thêm Thành Viên Mới</a>
        </div>

        <div class="menu">Menu
            <ul>
                <li><a href="index.php">Danh Sách User</a></li>
                <li><a href="create.php">Thêm User</a></li>
            </ul>
        </div>
        <div class="content">
            <h2>Danh Sách Người Dùng</h2>
            <?php
            include 'index.php';
            ?>
        </div>
        <div class ="footer">Footer</div>
    </div>
    
</body>
</html>