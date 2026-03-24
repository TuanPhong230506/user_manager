<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Đăng Nhập</title>
</head>

<body>
    <form method = "POST" action="xulydangnhap.php">
        <h3>Đăng Nhập Hệ Thống</h3>
        <table border="1">
            <tr>
            <td>UserName:</td>
            <td><input type="text" name = "Username"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="Password"></td>
        </tr>
        <tr>
                <td></td>
                <td><button type="submit" name="login">Đăng Nhập</button></td>
        </tr>
        
        </table>
        
    </form>
</body>
</html>