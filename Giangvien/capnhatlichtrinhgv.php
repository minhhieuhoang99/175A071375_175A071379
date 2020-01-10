<?php require_once("../includes/mysqli_connect.php"); ?>
<?php require ("../includes/dautrang.php"); ?>
<?php
	if (isset($_POST["capnhatlichtrinhgv"])) {
    $MaLTM = $_POST["MaLTM"];
    $BaiHocTT = $_POST["BaiHocTT"];
		$DiaDiemTT = $_POST["DiaDiemTT"];
		$ThoiGianTT = $_POST["ThoiGianTT"];  
		$sql = "UPDATE lichtrinhthucte SET BaiHocTT = '$BaiHocTT', DiaDiemTT = '$DiaDiemTT', ThoiGianTT = '$ThoiGianTT' WHERE MaLTM = '$MaLTM'";
		mysqli_query($dbcon,$sql);
		//header('Location: quanly_CNLmon.php');      
	}
    $id = -1; if (isset($_GET['id'])) {	$id = $_GET['id'];}
	$sql = "SELECT * FROM lichtrinhthucte WHERE MaLTM = '$id'";
	$query = mysqli_query($dbcon,$sql);
?>
    <main>
    <?php require ("../includes/nav.php"); ?>
      <div class="grid-container">
      <?php require ("navgiangvien.php"); ?>
        <div class="grid-item item2">
        <?php while ( $data = mysqli_fetch_array($query) ) { ?>
        <form action="capnhatgiangvien.php" method="POST">
          <div class="grid-container-table">
            <div class="item item-table1"><h3 >Cập Nhật Lịch Trình Thực Tế</h3></div>
            <div class="item item-table2"><p>Mã Lớp Học :</p></div>
            <div class="item item-table3">
              <input type="text"  value="<?php echo $data['MaLTM']; ?>" 
              name="HoTenGV" class="form-control" required  />
            </div>
            <div class="item item-table4"><p>Bài Học :</p> </div>
            <div class="item item-table5">
              <input type="text" value="<?php echo $data['BaiHocTT']; ?>"  
              name="MaGV" class="form-control" required readonly />
            </div>
            <div class="item item-table6"><p>Địa Điểm :</p> </div>
            <div class="item item-table7">
              <input type="date" value="<?php echo $data['DiaDiemTT']; ?>"  
              name="NgaySinh" class="form-control" required  />            
            </div>
            <div class="item item-table6"><p>Thời Gian :</p> </div>
            <div class="item item-table7">
              <input type="text" value="<?php echo $data['ThoiGianTT']; ?>"  
              name="DiaChi" class="form-control" required  />  
            </div>
          
            <div class="item item-table8" style="text-align: center;">
              <input type="submit" name="capnhatlichtrinhgv" class="submit" value="Cập Nhật" />
            </div>
            
          </div>
          </form>
          <?php } ?>
        </div>
        <div class="grid-item item3"></div>
      </div>
    </main>
    <?php require ("../includes/chantrang.php"); ?>