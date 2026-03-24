

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method = "POST" action="xulydangky.php" enctype="multipart/form-data">
         <h2>Đăng Ký User</h2>
        <table border="1">
            <tr>
                <td>UserName</td>
                <td><input type="text" name="Username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="Password"></td>
            </tr>
            <tr>
                <td>Role</td>
                <td>
                    <select name="Role">
                        <option value="0">User</option>
                        <option value="1">Admin</option>
                    </select>
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