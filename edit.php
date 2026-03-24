<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa User</title>
</head>
<body>
        <?php
            include('config.php');
            $id = $_GET['id'];
            $sql = "SELECT * FROM user WHERE Id = '$id'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
        ?>
        <form method = "POST" action="xulyedituser.php" enctype="multipart/form-data">
         <h2>Đăng Ký User</h2>
        <table border="1">
            <tr>
                <td>Id</td>
                <td><input type="number" name="Id" value="<?php echo $row['Id'];?>"></td>
            </tr>
            <tr>
                <td>UserName</td>
                <td><input type="text" name="Username" value="<?php echo $row['Username'];?>"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="Password" value="<?php echo $row['Password'];?>"></td>
            </tr>
            <tr>
                <td>Role</td>
                <td>
                    <select name="Role" id="">
                        <option value="0">User</option>
                        <option value="1">Admin</option>
                        
                    </select>
                    <?php echo $row['Role'];?>
                </td>
                
            </tr>           
            <tr>
                <td></td>
                <td><button type="submit" name="submit">Thêm Mới</button></td>
            </tr>
        </table>        
    </form>
</body>
</html>