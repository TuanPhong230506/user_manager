<?php
    include 'config.php';
    $sql = "SELECT * FROM user";
    $result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Quản Lý User</h1>
    <a href = "create.php">Thêm Thành Viên Mới</a>
    <table border="1">
        <th>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Password</th>
                <th>Role</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
        </th>
        <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?php echo $row['Id']; ?></td>
                    <td><?php echo $row['Username']; ?></td>
                    <td><?php echo $row['Password']; ?></td>
                    <td><?php echo $row['Role']; ?></td>
                    <td><a href="edit.php?id=<?php echo $row['Id'];?>">Sửa</a></td>
                    <td><a href="delete.php?id=<?php echo $row['Id'];?>">Xóa</a></td>
                </tr>
        </tbody>
        <?php
        }   
        ?>
    </table>
    <?php
        mysqli_close($conn);
    ?>
</body>
</html>