<?php require_once("../includes/mysqli_connect.php"); ?>
<?php require ("dautrang.php"); ?>
<?php
	if (isset($_POST["capnhatmon"])) {
		$MaNganh = $_POST["MaNganh"];
		$MaMon = $_POST["MaMon"];
		$TenMon = $_POST["TenMon"];
		$sql = "UPDATE mon SET TenMon = '$TenMon' WHERE MaMon = '$MaMon'";
		mysqli_query($dbcon,$sql);
		header('Location: quanly_CNmon.php');    
	}
    $id = -1;
	if (isset($_GET['id'])) {	$id = $_GET['id'];	}
	$sql = "SELECT * FROM mon WHERE MaMon = '$id'";
	$query = mysqli_query($dbcon,$sql);
?>
    <main>
    <?php require ("nav.php"); ?>
      <div class="grid-container">
      <?php require ("navquanly.php"); ?>
        <div class="grid-item item2">
        <div class="grid-table">
        <?php
		              while ( $data = mysqli_fetch_array($query) ) {
		              	
	                ?>
					<form action="capnhatmon.php" method="post">
						<div class="form-group" >
								<label>Mã ngành học</label>
                                <input type="text" name="MaNganh" class="form-control" required 
                                value="<?php echo $data['MaNganh']; ?>" readonly/>
							</div>
							<div class="form-group" >
								<label>Mã môn học</label>
                                <input type="text" name="MaMon" class="form-control" required 
                                value="<?php echo $data['MaMon']; ?>" readonly/>
							</div>
							<div class="form-group">
								<label>Tên môn học</label>
                                <input type="text" name="TenMon" class="form-control" required 
                                value="<?php echo $data['TenMon']; ?>"/>
							</div>
		                    <div class="form-group" style="text-align: center;">
                                <input type="submit" class="submit" name="capnhatmon"  value="Cập Nhật" />            
					        </div>                      
					</form>
					<?php } ?>
          </div>
        </div>
        <div class="grid-item item3"></div>
      </div>
    </main>
    <?php require ("chantrang.php"); ?>