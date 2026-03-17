

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Form Đăng Ký</h2>
    <form method = "POSt" action="xulydangky.php">
        <label>UserName:</label>
        <input type="text" name="Username" required> <br>

        <label>Password:</label>
        <input type="password" name="Password" require> <br>

        <label>Role:</label>
        <select name="Role" id="">
            <option value="0">User</option>
            <option value="1">Admin</option>
        </select> <br>

        <button type="submit" name="submit">Thêm Mới</button>
    </form>
</body>
</html>