<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xử Lý Đăng Edit User</title>
</head>
<body>
    <?php
            include('config.php');
            $Username = $_POST['Username'];
            $Password = $_POST['Password'];
            $Role = $_POST['Role'];
            $id = $_POST['Id'];
            $sql = "UPDATE user SET Username = '$Username' ,Password='$Password',Role ='$Role' WHERE Id= '$id'";
            $result = mysqli_query($conn, $sql);
            header('location:index.php');
        ?>
</body>
</html>