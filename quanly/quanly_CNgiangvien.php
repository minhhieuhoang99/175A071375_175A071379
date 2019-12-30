<?php require_once("../includes/mysqli_connect.php"); ?>
<?php require ("dautrang.php"); ?>

<?php
    $sql = "SELECT MaGV,HoTenGV,NgaySinh,DiaChi FROM giangvien";
    $query = mysqli_query($dbcon,$sql);
?>
<?php
	if (isset($_GET["id_delete"])) {		
		$sql = 'DELETE FROM giangvien WHERE MaGV LIKE "' . $_GET["id_delete"] . '"';     
		mysqli_query($dbcon,$sql);
		
	}

?>
<main>
<?php require ("nav.php"); ?>
      <div class="grid-container">
      <?php require ("navquanly.php"); ?>
        <div class="grid-item item2">
        <table class="table">
      <thead class="thead-light">
        <tr>
                    
          <th scope="col">Mã Giảng Viên</th>
          <th scope="col">Tên Giảng Viên</th>
          <th scope="col">Ngày Sinh </th>
          <th scope="col">Địa Chỉ</th>
          <th scope="col">Sửa</th>
          <th scope="col">Xóa</th>

        </tr>
      </thead>
      <tbody>
          <?php 
            while ( $row = mysqli_fetch_array($query)) {
               $MaGV = $row['MaGV'];
               
        ?>
        <tr>
            <th  scope="row" ><?php echo $row['MaGV']; ?></th> 
            <td><?php echo $row['HoTenGV']; ?></td>
            <td><?php echo $row['NgaySinh']; ?></td>
            <td><?php echo $row['DiaChi']; ?></td>
            <td><a href="capnhatgiangvien.php?id=<?php echo $MaGV;?>">Sửa</a></td>
            <td><a href="quanly_CNgiangvien.php?id_delete=<?php echo $MaGV;?>">Xóa</a></td>

        </tr>
        <?php } ?>
      </tbody>
    </table>

        </div>
        <div class="grid-item item3"></div>
      </div>
    </main>
    
        
<?php require ("chantrang.php"); ?>