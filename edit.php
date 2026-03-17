<?php
include 'config.php';
$Id = $_GET['id'];
// Lấy thông tin user hiện tại
$sql = "SELECT * FROM user WHERE id = $Id";
$query = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($query);
?>
<?php
if (isset($_POST['submit'])) {
 $password = $_POST['Password'];
 $role = $_POST['Role'];
 $sql_update = "UPDATE user SET Password='$Password', Role='$Role' WHERE
id='$id'";

 if (mysqli_query($conn, $sql_update)) {
 header('Location: index.php'); // Quay về trang chủ
 } else {
 echo "Lỗi: " . mysqli_error($conn);
 }
}
?>
<!-- Form HTML hiển thị dữ liệu cũ -->
<form method="POST">
 <label>Username:</label>
 <input type="text" name="Username" value="<?php echo $data['Username'];
?>" required> <br>
 <input type="text" name="Password" ?> <br>
 <label>Role:</label>
 <select name="role">
 <option value="0" <?php if($data['Role']==0) echo 'selected';
?>>User</option>
 <option value="1" <?php if($data['Role']==1) echo 'selected';
?>>Admin</option>
 </select> <br>

 <button type="submit" name="submit">Cập nhật</button>
</form>
