<?php
// mysql select query
// $query = "SELECT `MaNganh` FROM `nganh`";

// $result = mysqli_query($dbcon, $query);

// $options = "";

// while($row = mysqli_fetch_array($result))
// {
//     $options = $options."<option>$row[0]</option>";
// } 

$message = '';
if (isset($_POST["tao_lophp"])) {
 
  $MaLHP = $_POST["MaLHP"];
  $TenLopHP = $_POST["TenLopHP"];
  $MaTGH = $_POST["MaTGH"];
          
  $sql = "INSERT INTO mon VALUES ('$MaLHP', '$TenLopHP','$MaTGH')";
 
      mysqli_set_charset($dbcon,$sql);
      mysqli_query($dbcon,$sql);
      
      
  $message = '<label class="text-success">Tạo Môn học thành công</label>';
  
}
?>