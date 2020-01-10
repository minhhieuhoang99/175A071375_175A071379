<?php require_once("../includes/mysqli_connect.php"); ?>
<?php require ("../includes/dautrang.php"); ?>
<?php
	if (isset($_POST["capnhatnganh"])) {
		$MaNganh = $_POST["MaNganh"];
		$TenNganh = $_POST["TenNganh"];
		$sql = "UPDATE nganh SET TenNganh = '$TenNganh' WHERE MaNganh = '$MaNganh'";
		mysqli_query($dbcon,$sql);
		header('Location: quanly_CNnganh.php');
	}
    $id = -1;	if (isset($_GET['id'])) {	$id = $_GET['id'];	}
	$sql = "SELECT * FROM nganh WHERE MaNganh = '$id'";
	$query = mysqli_query($dbcon,$sql);
?>    
    <main>
    <?php require ("../includes/nav.php"); ?>
      <div class="grid-container">
      <?php require ("navquanly.php"); ?>
        <div class="grid-item item2">
		<div class="grid-table"  >
              
			  <?php
		              while ( $data = mysqli_fetch_array($query) ) {
		              	
	          ?>
			  <form action="capnhatnganh.php" method="POST">
                  <div class="item item-table1"><h3 >TẠO NGÀNH HỌC</h3></div>
                  <div class="form-group">
                      <div class="item item-table2"><p>Tên ngành:</p></div>
                      <div class="item item-table3"><input type="text"   name="TenNganh" class="form-control" required 
					  value="<?php echo $data['TenNganh']; ?>" />
					  </div>
                  </div> 
                  <div class="form-group"> 
                      <div class="item item-table4"><p>Mã ngành:</p></div>
                      <div class="item item-table5"><input type="text"   maxlength="10" name="MaNganh" class="form-control" required 
					  value="<?php echo $data['MaNganh']; ?>" readonly/>
					  </div>
				  </div> 
                  <div class="form-group"> 
                      <div class="item item-table6" style="text-align: center;">
                      <input type="submit" class="submit" name="capnhatnganh"  value="Cập Nhật" />            
					  </div>          
                  </div> 
                             
					    </form>
						<?php
					  }
		              	
	                ?>
              </div>     
		</div>
        <div class="grid-item item3"></div>
      </div>
    </main>
	<?php require ("../includes/chantrang.php"); ?>