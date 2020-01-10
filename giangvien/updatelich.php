
<?php require_once("../includes/mysqli_connect.php"); ?>
<?php require ("../includes/dautrang.php"); ?>
<?php error_reporting(0);
ini_set('display_errors', 0);?>

<?php
    if (isset($_POST["btn_submit"])){
        $nhapthongtin = $_POST["nhapthongtin"];
             
        
		$sql = "SELECT * FROM giangvien, lopmonhoc, ctlophp, lichtrinhthucte  WHERE  giangvien.MaGV = lopmonhoc.MaGV AND giangvien.HoTenGV = '$nhapthongtin' AND lopmonhoc.MaLTM = ctlophp.MaLTM AND  lichtrinhthucte.MaLTM = ctlophp.MaLTM";
        $query = mysqli_query($dbcon,$sql);
		
	
    }
	
?>


    <main>
    <?php require ("../includes/nav.php"); ?>
	<div class="grid-container">
      <?php require ("navgiangvien.php"); ?>
        <div class="grid-item item2">
		<div class="main">
            <form action="updatelich.php" method="post" >
            
            <div class="form-group">
                <label for="exampleInputPassword1">Thông tin giảng viên</label>
                <input type="text" class="form-control" id="nhapthongtin" name="nhapthongtin">
            </div>
            
            <input type="submit" class="btn btn-primary" value="Xem" name="btn_submit" >
            </form>
            </div>
                <div>
                <table class="table">
                        <thead class="thead-light">
                            <tr>
							<th scope="col">Tên Lớp môn</th>
                            <th scope="col">Mã Lớp Môn</th>
							<th scope="col">Mã Lớp HP</th>
							<th scope="col">Bài Học</th>
							<th scope="col">Địa Điểm</th>
							<th scope="col">Thời Gian</th>
                            <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
						
                      <tr>
                            <?php 
                                while ( $data = mysqli_fetch_array($query)) {
                                    $MaLTM = $data['MaLTM'];
                                    
                            ?>
                            
							<td><?php echo $data["TenLopMon"];?></td>
							<td><?php echo $data["MaLTM"];?></td>
							<td><?php echo $data["MaLHP"];?></td>
							<td><?php echo $data["BaiHocTT"];?></td>
							<td><?php echo $data["DiaDiemTT"];?></td>
							<td><?php echo $data["ThoiGianTT"];?></td>
                            <td><a href="capnhatlichtrinhgv.php?id=<?php echo $MaLTM;?>">Sửa</a></td>
							</tr>
							<?php 
			 //$i++;
			
		}
	?>
                        </tbody>
			        </table>
                </div>
		</div>
        <div class="grid-item item3"></div>
      </div>

            

    </main>
    <?php require ("../includes/chantrang.php"); ?>
    