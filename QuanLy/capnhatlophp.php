<?php require_once("../includes/mysqli_connect.php"); ?>
<?php require ("../includes/dautrang.php"); ?>
  <?php
	if (isset($_POST["capnhatlophp"])) {
		$MaLHP = $_POST["MaLHP"];
		$MaTGH = $_POST["MaTGH"];
		$TenLopHP = $_POST["TenLopHP"];
		$sql = "UPDATE `lophocphan` SET `TenLopHP`='$TenLopHP' , `MaTGH`='$MaTGH' WHERE `MaLHP`='$MaLHP'";
		mysqli_query($dbcon,$sql);
		header('Location:quanly_CNLhp.php');     
	}
    $id = -1;
	if (isset($_GET['id'])) { $id = $_GET['id'];	}
	$sql = "SELECT * FROM lophocphan WHERE MaLHP = '$id'";
	$query = mysqli_query($dbcon,$sql);
?>  
  <main>
  <?php require ("../includes/nav.php"); ?>
      <div class="grid-container">
      <?php require ("navquanly.php"); ?>
        <div class="grid-item item2">
		<?php     while ( $data = mysqli_fetch_array($query) ) {    	?>
					<form action="capnhatlophp.php" method="POST">
							<div class="form-group" >
								<label>Tên lớp học phần</label>
								<input type="text" name="TenLopHP" class="form-control" required 
								value="<?php echo $data['TenLopHP']; ?>"/>
							</div>
							<div class="form-group">
								<label>Mã lớp học phần </label>
								<input type="text" name="MaLHP" class="form-control" required readonly
								value="<?php echo $data['MaLHP']; ?>"/>
							</div>			
							<div class="form-group">
								<label>Mã TGH</label>
								<?php
								$sql = mysqli_query($dbcon,"select MaTGH from thoigianhoc") or die(myqli_error($dbcon));
								if (mysqli_num_rows($sql) > 0) {
								$i=0;
								?>
								<select class="form-control" name = "MaTGH" >
									<option><?php echo $data['MaTGH']; ?> </option>
									<?php while($row=mysqli_fetch_assoc($sql)) {
									$i++; ?>
									<option><?php echo $row['MaTGH']; ?></option>
									<?php }}  ?>
								</select>
						    </div>
		                    <div class="form-group" >

									<input type="submit" name="capnhatlophp" value="Cập nhật"/>
							</div>
					</form>
					<?php } ?>
          </div>
        <div class="grid-item item3"></div>
      </div>
    </main>
	<?php require ("../includes/chantrang.php"); ?>
