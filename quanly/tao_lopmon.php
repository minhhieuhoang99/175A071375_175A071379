<?php

$message = '';
if (isset($_POST["tao_lopmon"])) {
  //lấy thông tin từ các form bằng phương thức POST
  $TenLopMon = $_POST["TenLopMon"];
  $MaLopMon = $_POST["MaLTM"];
  $MaMon = $_POST["MaMon"];  

  $sql = "INSERT INTO lopmonhoc VALUES ('$MaLopMon', '$TenLopMon','$MaMon')";
  // thực thi câu $sql với biến dbcon lấy từ file connection.php
      mysqli_set_charset($dbcon,$sql);
      mysqli_query($dbcon,$sql);
      
      
  $message = '<label class="text-success">Tạo Môn học thành công</label>'; 
}
?>