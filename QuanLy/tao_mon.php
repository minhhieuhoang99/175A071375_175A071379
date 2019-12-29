<?php

$message = '';
if (isset($_POST["tao_mon"])) {
  
  $MaMon = $_POST["MaMon"];
  $TenMon = $_POST["TenMon"];
  $MaNganh = $_POST["MaNganh"];
          
  $sql = "INSERT INTO mon VALUES ('$TenMon', '$MaMon','$MaNganh')";
  
      mysqli_set_charset($dbcon,$sql);
      mysqli_query($dbcon,$sql);
      
      
  $message = '<label class="text-success">Tạo Môn học thành công</label>';
  
}
?>