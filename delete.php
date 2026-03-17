<?php
include 'config.php';
if(isset($_GET['Id'])){
 $id = $_GET['Id'];
 $sql = "DELETE FROM user WHERE Id = $id";

 if (mysqli_query($conn, $sql)) {
 header('Location: index.php');
 } else {
 echo "Lỗi xóa: " . mysqli_error($conn);
 }
}
?>