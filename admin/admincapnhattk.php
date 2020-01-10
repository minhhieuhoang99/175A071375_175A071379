<?php require_once("../includes/mysqli_connect.php"); ?>
<?php require ("../includes/dautrang.php"); ?>
<?php
	if (isset($_POST["admincapnhattk"])) {
		$TenTaiKhoan = $_POST["TenTaiKhoan"];		
		$email = $_POST["email"];
		$CapDo = $_POST["CapDo"];
		$MaTK = $_POST["MaTK"];
		$sql = "UPDATE taikhoan SET  email = '$email', CapDo = '$CapDo' WHERE MaTK = '$MaTK'";
		mysqli_query($dbcon,$sql);
		header('Location: admin_CNtk.php');    
	}
    $id = -1;
	if (isset($_GET['id'])) {	$id = $_GET['id'];	}
	$sql = "SELECT * FROM taikhoan WHERE MaTK = '$id'";
	$query = mysqli_query($dbcon,$sql);
?>
    <main>
	<?php require ("../includes/nav.php"); ?>
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
                                <input type="text" name="MaTK" class="form-control" required 
                                value="<?php echo $data['MaTK']; ?>" readonly/>
							</div>
							<div class="form-group">
								<label>Email</label>
                                <input type="text" name="email" class="form-control" required 
                                value="<?php echo $data['email']; ?>"/>
							</div>
							<div class="form-group">
								<label>Cấp Độ</label>
                <select class="form-control" id="CapDo" name="CapDo" placeholder=""
                                            maxlength="60" required
                                            value="">
                                            <option id="CapDo" name="CapDo" value="">
                                            <?php if( $data['CapDo']=="2" )
                                            {echo "Quản Lý" ;}
                                            else
                                            {echo "Giảng Viên" ;}
                                            ?>
                                            </option>
                                            <option  value="3">Giảng Viên</option>
                                            <option  value="2">Quản Lý</option>
                                            
                 </select>
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
	<?php require ("../includes/chantrang.php"); ?>
