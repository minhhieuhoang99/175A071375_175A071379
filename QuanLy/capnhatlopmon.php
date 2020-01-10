<?php require_once("../includes/mysqli_connect.php"); ?>
<?php require ("../includes/dautrang.php"); ?>
  <?php
	if (isset($_POST["capnhatlopmon"])) {
		$MaLTM = $_POST["MaLTM"];
		$TenLopMon = $_POST["TenLopMon"];
		$MaMon = $_POST["MaMon"];
		$MaGV = $_POST["MaGV"];         
		$sql = "UPDATE lopmonhoc SET TenLopMon = '$TenLopMon', MaMon = '$MaMon', MaGV = '$MaGV' WHERE MaLTM = '$MaLTM'";
		mysqli_query($dbcon,$sql);
		//header('Location: quanly_CNLmon.php');      
	}
    $id = -1; if (isset($_GET['id'])) {	$id = $_GET['id'];}
	$sql = "SELECT * FROM lopmonhoc WHERE MaLTM = '$id'";
	$query = mysqli_query($dbcon,$sql);
?>
    <main>
    <?php require ("../includes/nav.php"); ?>
      <div class="grid-container">
      <?php require ("navquanly.php"); ?>
        <div class="grid-item item2">
        <?php while ( $data = mysqli_fetch_array($query) ) { ?>
        <form action="capnhatlopmon.php" method="POST">
          <div class="grid-container-table">
            <div class="item item-table1"><h3 >TẠO LỚP MÔN HỌC</h3></div>
            <div class="item item-table2"><p>Tên lớp môn:</p></div>
            <div class="item item-table3">
              <input type="text"  value="<?php echo $data['TenLopMon']; ?>" 
              name="TenLopMon" class="form-control" required  />
            </div>
            <div class="item item-table4"><p>Mã lớp môn:</p> </div>
            <div class="item item-table5">
              <input type="text" value="<?php echo $data['MaLTM']; ?>"  
              name="MaLTM" class="form-control" required  />
            </div>
            <div class="item item-table6"><p>Mã Môn:</p> </div>
            <div class="item item-table7">
                <?php
                $sql = mysqli_query($dbcon,"select MaMon from mon") or die(myqli_error($dbcon));
                if (mysqli_num_rows($sql) > 0) {
                $i=0;
                ?>
                <select  class=" form-control" name="MaMon">
                <option><?php echo $data['MaMon']; ?></option>
                <?php while($row=mysqli_fetch_assoc($sql)) {
                $i++; ?>

                <option><?php echo $row['MaMon']; ?></option>
                <?php }
                }  ?>
                </select>            
            </div>
            <div class="item item-table6"><p>Mã Giảng Viên:</p> </div>
            <div class="item item-table7">
                <?php
                $sql = mysqli_query($dbcon,"select MaGV from GiangVien") or die(myqli_error($dbcon));
                if (mysqli_num_rows($sql) > 0) {
                $i=0;
                ?>
                <select  class=" form-control" name="MaGV">
                <option><?php echo $data['MaGV']; ?></option>
                <?php while($row=mysqli_fetch_assoc($sql)) {
                $i++; ?>

                <option><?php echo $row['MaGV']; ?></option>
                <?php }
                }  ?>
                </select>
            </div>
          
            <div class="item item-table8" style="text-align: center;">
              <input type="submit" name="capnhatlopmon" class="submit" value="Cập Nhật" />
            </div>
            
          </div>
          </form>
          <?php } ?>
        </div>
        <div class="grid-item item3"></div>
      </div>
    </main>
    <?php require ("../includes/dautrang.php"); ?>
