<?php require_once("../includes/mysqli_connect.php"); ?>
<?php require ("dautrang.php"); ?>
<?php
	if (isset($_POST["capnhatgiangvien"])) {
		$MaGV = $_POST["MaGV"];
		$HoTenGV = $_POST["HoTenGV"];
		$NgaySinh = $_POST["NgaySinh"];
		$DiaChi = $_POST["DiaChi"];         
		$sql = "UPDATE giangvien SET HoTenGV = '$HoTenGV', NgaySinh = '$NgaySinh', DiaChi = '$DiaChi' WHERE MaGV = '$MaGV'";
		mysqli_query($dbcon,$sql);
		//header('Location: quanly_CNLmon.php');      
	}
    $id = -1; if (isset($_GET['id'])) {	$id = $_GET['id'];}
	$sql = "SELECT * FROM giangvien WHERE MaGV = '$id'";
	$query = mysqli_query($dbcon,$sql);
?>
    <main>
    <?php require ("nav.php"); ?>
      <div class="grid-container">
      <?php require ("navquanly.php"); ?>
        <div class="grid-item item2">
        <?php while ( $data = mysqli_fetch_array($query) ) { ?>
        <form action="capnhatgiangvien.php" method="POST">
          <div class="grid-container-table">
            <div class="item item-table1"><h3 >Cập Nhật Giảng Viên</h3></div>
            <div class="item item-table2"><p>Tên Giảng Viên :</p></div>
            <div class="item item-table3">
              <input type="text"  value="<?php echo $data['HoTenGV']; ?>" 
              name="HoTenGV" class="form-control" required  />
            </div>
            <div class="item item-table4"><p>Mã Giảng Viên :</p> </div>
            <div class="item item-table5">
              <input type="text" value="<?php echo $data['MaGV']; ?>"  
              name="MaGV" class="form-control" required readonly />
            </div>
            <div class="item item-table6"><p>Ngày Sinh :</p> </div>
            <div class="item item-table7">
              <input type="date" value="<?php echo $data['NgaySinh']; ?>"  
              name="NgaySinh" class="form-control" required  />            
            </div>
            <div class="item item-table6"><p>Địa chỉ :</p> </div>
            <div class="item item-table7">
              <input type="text" value="<?php echo $data['DiaChi']; ?>"  
              name="DiaChi" class="form-control" required  />  
            </div>
          
            <div class="item item-table8" style="text-align: center;">
              <input type="submit" name="capnhatgiangvien" class="submit" value="Cập Nhật" />
            </div>
            
          </div>
          </form>
          <?php } ?>
        </div>
        <div class="grid-item item3"></div>
      </div>
    </main>
    <?php require ("chantrang.php"); ?>