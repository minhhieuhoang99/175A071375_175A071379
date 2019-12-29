<?php

$message = '';
if (isset($_POST["tao_lophp"])) {
 
  $MaLHP = $_POST["MaLHP"];
  $TenLopHP = $_POST["TenLopHP"];
  $MaTGH = $_POST["MaTGH"];
          
  $sql = "INSERT INTO lophocphan VALUES ( '$TenLopHP','$MaLHP','$MaTGH')";
 
      mysqli_set_charset($dbcon,$sql);
      mysqli_query($dbcon,$sql);
      
      
  $message = '<label class="text-success">Tạo Môn học thành công</label>';
  
}
?>