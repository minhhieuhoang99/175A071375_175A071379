<?php require_once("../includes/mysqli_connect.php"); ?>
<?php require ("dautrang.php"); ?>
<?php
    $sql = "SELECT TenTaiKhoan,MaTK,email,CapDo,MatKhau FROM taikhoan";
    $query = mysqli_query($dbcon,$sql);
?>
<?php
	if (isset($_GET["id_delete"])) {		
		$sql = 'DELETE FROM taikhoan WHERE MaTK LIKE "' . $_GET["id_delete"] . '"';
		mysqli_query($dbcon,$sql);	
	}	
?>
    <main>
	<?php require ("nav.php"); ?>
      <div class="grid-container">
      <?php require ("navadmin.php"); ?>
        <div class="grid-item item2">
        <table class="table">
      <thead class="thead-light">
        <tr>
                    
          <th scope="col">Mã Tài Khoản</th>
          <th scope="col">Tên Tài Khoản</th>
          <th scope="col">Mật Khẩu</th>
          <th scope="col">Email</th>
		  <th scope="col">Cấp Độ</th>
          <th scope="col">Sửa</th>
          <th scope="col">Xóa</th>

        </tr>
      </thead>
      <tbody>
          <?php 
            while ( $row = mysqli_fetch_array($query)) {
               $MaTK = $row['MaTK'];
               
        ?>
        <tr>
            <th  scope="row" ><?php echo $row['MaTK']; ?></th> 
            <td><?php echo $row['TenTaiKhoan']; ?></td>
            <td><?php echo $row['MatKhau']; ?></td>
            <td><?php echo $row['email']; ?></td>
			<td><?php echo $row['CapDo']; ?></td>
            <td><a href="admincapnhattk.php?id=<?php echo $MaTK;?>">Sửa</a></td>
            <td><a href="admin_CNtk.php?id_delete=<?php echo $MaTK;?>">Xóa</a></td>

        </tr>
        <?php } ?>
      </tbody>
    </table>

        </div>
        <div class="grid-item item3"></div>
      </div>
      
    </main>
    <?php require ("chantrang.php"); ?>

