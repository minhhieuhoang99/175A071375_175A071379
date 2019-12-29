<?php

$message = '';
if (isset($_POST["tao_lopmon"])) {

  $TenLopMon = $_POST["TenLopMon"];
  $MaLopMon = $_POST["MaLTM"];
  $MaMon = $_POST["MaMon"];  

  $sql = "INSERT INTO lopmonhoc VALUES ('$TenLopMon','$MaLopMon', '$MaMon')";
  
      mysqli_set_charset($dbcon,$sql);
      mysqli_query($dbcon,$sql);
      
      
  $message = '<label class="text-success">Tạo Môn học thành công</label>'; 
}
?>