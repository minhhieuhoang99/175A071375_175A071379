
<?php require_once("../includes/mysqli_connect.php"); ?>
<?php require ("../includes/dautrang.php"); ?>
<?php error_reporting(0);
ini_set('display_errors', 0); ?>


<?php
    if (isset($_POST["btn_submit"])){
        $nhapthongtin = $_POST["nhapthongtin"];
             
        
		$sql = "SELECT * FROM lopmonhoc, ctlophp,kehoachgiangday, lichtrinhthucte, giangvien  WHERE   giangvien.HoTenGV = '$nhapthongtin' AND lopmonhoc.MaGV = giangvien.MaGV AND lopmonhoc.MaLTM = ctlophp.MaLTM AND  kehoachgiangday.MaLTM = ctlophp.MaLTM AND  lichtrinhthucte.MaLTM = ctlophp.MaLTM";
        $query = mysqli_query($dbcon,$sql);
		
	
    }
	
?>


    <main>
	<div class="grid-container">
    <?php require ("navsinhvien.php"); ?>
        <div class="grid-item item2">
		<div class="main">
            <form action="svtracuu.php" method="post" >
            
            <div class="form-group">
                <label for="exampleInputPassword1">Nhập tên giảng viên</label>
                <input type="text" class="form-control" id="nhapthongtin" name="nhapthongtin">
            </div>
            
            <input type="submit" class="btn btn-primary" value="Xem" name="btn_submit" >
            </form>
            </div>
                <div>
               
                <table class="table" style ="font-size:14px;">
                        <thead class="thead-light">
                            <tr>
                            <th scope="col">Mã Lớp Môn</th>
							<th scope="col">Mã Lớp HP</th>
							<th scope="col">Bài Học Dự Kiến</th>
							<th scope="col">Địa Điểm Dự Kiến</th>
							<th scope="col">Thời Gian Dự Kiến</th>
                            <th scope="col">Bài Học Thực Tế</th>
							<th scope="col">Địa Điểm Thực Tế</th>
							<th scope="col">Thời Gian Thực Tế</th>
                            </tr>
                        </thead>
						 <?php 
                                while ( $data = mysqli_fetch_array($query)) {
                                
                                    
                            ?>
                        <tbody>
						
                      <tr>
                            
                            
							<td><?php echo $data["MaLTM"];?></td>
							<td><?php echo $data["MaLHP"];?></td>
							<td><?php echo $data["BaiHocDK"];?></td>
							<td><?php echo $data["DiaDiemDK"];?></td>
							<td><?php echo $data["ThoiGianDK"];?></td>
                            <td><?php echo $data["BaiHocTT"];?></td>
							<td><?php echo $data["DiaDiemTT"];?></td>
							<td><?php echo $data["ThoiGianTT"];?></td>
							</tr>
							<?php 
			 //$i++;
			
		}
	?>
                        </tbody>
			        </table>
                </div>
		</div>

            </div>

    </main>
    <?php require ("../includes/chantrang.php"); ?>
    