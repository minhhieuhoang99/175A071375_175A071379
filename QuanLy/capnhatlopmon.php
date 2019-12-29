<?php require_once("../includes/mysqli_connect.php"); ?>
  <?php require ("dautrang.php"); ?>
  <?php
	if (isset($_POST["edit_sectionclass"])) {
		$MALOPHOCPHAN = $_POST["MALOPMONHOC"];
		$TENLOPHOCPHAN = $_POST["TENLOPHOCPHAN"];
		$MALOPMONHOC = $_POST["MALOPMONHOC"];
		$MAGIANGVIEN = $_POST["MAGIANGVIEN"];
        $MATHOIGIAN = $_POST["MATHOIGIAN"];
        
		$sql = "UPDATE lophocphan SET TENLOPHOCPHAN = '$TENLOPHOCPHAN', MALOPMONHOC = '$MALOPMONHOC', MAGIANGVIEN = '$MAGIANGVIEN', MATHOIGIAN = '$MATHOIGIAN' WHERE MALOPHOCPHAN = '$MALOPHOCPHAN'";
		mysqli_query($conn,$sql);
		header('Location: manager.php');      
	}
    $id = -1; if (isset($_GET['id'])) {	$id = $_GET['id'];}
	$sql = "SELECT * FROM lophocphan WHERE MALOPHOCPHAN = '$id'";
	$query = mysqli_query($conn,$sql);
?>
    <main>
    <?php require ("nav.php"); ?>
      <div class="grid-container">
      <?php require ("navquanly.php"); ?>
        <div class="grid-item item2"></div>
        <div class="grid-item item3"></div>
      </div>
    </main>
    <?php require ("chantrang.php"); ?>
