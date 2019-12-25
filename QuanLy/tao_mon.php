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
if (isset($_POST["tao_mon"])) {
  //lấy thông tin từ các form bằng phương thức POST
  $MaMon = $_POST["MaMon"];
  $TenMon = $_POST["TenMon"];
  $MaNganh = $_POST["MaNganh"];
          
  $sql = "INSERT INTO mon VALUES ('$TenMon', '$MaMon','$MaNganh')";
  // thực thi câu $sql với biến dbcon lấy từ file connection.php
      mysqli_set_charset($dbcon,$sql);
      mysqli_query($dbcon,$sql);
      
      
  $message = '<label class="text-success">Tạo Môn học thành công</label>';
  
}
?>