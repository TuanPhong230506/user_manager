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
    <a href = "create.php">Thêm Thành Viên Mới</a>
    <table border="1" cellspacing ="0" cellpadding="1">
        <th>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Role</th>
                <th>Hành Động</th>
            </tr>
        </th>
        <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                $roleText = ($row['Role'] == 1) ? "Admin" : "User";
            ?>
                <tr>
                    <td><?php echo $row['Id']; ?></td>
                    <td><?php echo $row['Username']; ?></td>
                    <td><?php echo $roleText; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $row['Id']; ?>"> Sửa Users</a> |
                        <a href="delete.php?id=<?php echo $row['Id']; ?>" 
                            onclick="return confirm('Bạn Có Chắc Chắn Muốn Xóa?');">Xóa</a>
                    </td>
                </tr>
        </tbody>
        <?php
        }   
        ?>
    </table>
</body>
</html>