<?php
$message = '';
if (isset($_POST["tao_mon"])) {
  //lấy thông tin từ các form bằng phương thức POST
  $MaMon = $_POST["MaMon"];
  $TenMon = $_POST["TenMon"];
          

  $sql = "INSERT INTO mon VALUES ('$TenMon', '$MaMon','')";
  // thực thi câu $sql với biến dbcon lấy từ file connection.php
      mysqli_set_charset($dbcon,$sql);
      mysqli_query($dbcon,$sql);
      
      
  $message = '<label class="text-success">Tạo Môn học thành công</label>';
  
}

?>