<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $Servername = "localhost";
        $Username = "root";
        $Password = "";
        $Dbname = "php_ltmt1_k16";
        $conn = mysqli_connect($Servername, $Username, $Password, $Dbname);
        if (!$conn){
            die("Kết Nối Thất Bại: ".mysqli_connect_error());
        }
        echo"Kết Nối Thành Công!";
    ?>
    
</body>
</html>