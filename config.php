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