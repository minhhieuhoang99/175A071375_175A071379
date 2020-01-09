<?php require_once("../includes/mysqli_connect.php"); ?>
<?php require ("dautrang.php"); ?>
<?php
	if (isset($_POST["admincapnhattk"])) {
		$TenTaiKhoan = $_POST["TenTaiKhoan"];
		$MatKhau = $_POST["MatKhau"];
		$email = $_POST["email"];
		$CapDo = $_POST["CapDo"];
		$MaTK = $_POST["MaTK"];
		$sql = "UPDATE taikhoan SET MatKhau = '$MatKhau', email = '$email', CapDo = '$CapDo' WHERE MaTK = '$MaTK'";
		mysqli_query($dbcon,$sql);
		header('Location: admin_CNtk.php');    
	}
    $id = -1;
	if (isset($_GET['id'])) {	$id = $_GET['id'];	}
	$sql = "SELECT * FROM taikhoan WHERE MaTK = 'id'";
	$query = mysqli_query($dbcon,$sql);
?>
    <main>
	  <?php require ("nav.php"); ?>
      <div class="grid-container">
      <?php require ("navadmin.php"); ?>
      <div class="grid-item item2">
	  <div class="grid-table">
        <?php
		              while ( $data = mysqli_fetch_array($query) ) {
		              	
	                ?>
					<form action="admincapnhattk.php" method="post">
						<div class="form-group" >
								<label>Tên Tài Khoản</label>
                                <input type="text" name="TenTaiKhoan" class="form-control" required 
                                value="<?php echo $data['TenTaiKhoan']; ?>" readonly/>
							</div>
							<div class="form-group" >
								<label>Mã Tài Khoản</label>
                                <input type="text" name="TenTaiKhoan" class="form-control" required 
                                value="<?php echo $data['MaTK']; ?>" readonly/>
							</div>
							<div class="form-group">
								<label>Mật Khẩu</label>
                                <input type="text" name="MatKhau" class="form-control" required 
                                value="<?php echo $data['MatKhau']; ?>"/>
							</div>
							<div class="form-group">
								<label>Email</label>
                                <input type="text" name="email" class="form-control" required 
                                value="<?php echo $data['email']; ?>"/>
							</div>
							<div class="form-group">
								<label>Cấp Độ</label>
                                <input type="text" name="CapDo" class="form-control" required 
                                value="<?php echo $data['CapDo']; ?>"/>
							</div>
		                    <div class="form-group" style="text-align: center;">
                                <input type="submit" class="submit" name="admincapnhattk"  value="Cập Nhật" />            
					        </div>                      
					</form>
					<?php } ?>
        </div>
		</div>
        </div>
      </div>
    </main>
    <?php require ("chantrang.php"); ?>
