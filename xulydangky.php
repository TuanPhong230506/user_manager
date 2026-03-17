<?php
    include 'config.php';
    if (isset($_POST['submit'])){
        $Username = $_POST['Username'];
        $Password = $_POST['Password'];
        $Role = $_POST['Role'];

        $sql = "INSERT INTO user (Username, Password, Role) VALUES ('$Username', '$Password', '$Role' )";

        if (mysqli_query($conn, $sql)) {
            echo "Thêm Thành Viên Thành Công!";
        } else{
            echo "Lỗi:".mysql_error($conn);
        }
    }
?>