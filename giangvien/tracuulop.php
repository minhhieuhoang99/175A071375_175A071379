
<?php require_once("../includes/mysqli_connect.php"); ?>
<?php require ("dautrang.php"); ?>
<?php error_reporting(0);
ini_set('display_errors', 0);?>

<?php
    if (isset($_POST["btn_submit"])){
        $nhapthongtin = $_POST["nhapthongtin"];
        $sql = "SELECT * FROM lopmonhoc WHERE MaGV =(SELECT MaGV FROM giangvien WHERE HoTenGV like '$nhapthongtin')";
        $query = mysqli_query($dbcon,$sql);        
        
        $sql1 = "SELECT * FROM giangvien WHERE hoTenGV = '$nhapthongtin'";
        $query1 = mysqli_query($dbcon,$sql1);

        
    }
	
?>


    <main>
	<?php require ("nav.php"); ?>
	<div class="grid-container">
      <?php require ("navgiangvien.php"); ?>
        <div class="grid-item item2">
		<div class="main">
            <form action="lichtrinhgiangday.php" method="post" >
            
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
                            <th scope="col">Tên giảng viên</th>
                            <th scope="col">Mã Giảng Viên </th>
                            <th scope="col">Tên Lớp Môn</th>
							<th scope="col">Mã Lớp Môn</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                                while ( $data1 = mysqli_fetch_array($query1)) {
                                
                                   
                            ?>
                            <tr>
                            <td scope="row"><?php echo $data1['HoTenGV']; ?></td>
                            
                            <?php } ?>
                            <?php 
                                while ( $data = mysqli_fetch_array($query)) {
                                
                                    
                            ?>
                            <td scope="row"><?php echo $data['MaGV']; ?></td>
                            <td scope="row"><?php echo $data['TenLopMon']; ?></td>
							<td scope="row"><?php echo $data['MaLTM']; ?></td>
                            
                            <?php } ?>
                            <?php 
                                while ( $data2 = mysqli_fetch_array($query2)) {
                                
                                    
                            ?>
                          
                            <?php } ?>
                        </tbody>
			        </table>
                </div>
		</div>
        <div class="grid-item item3"></div>
      </div>

            

    </main>
    <?php require ("chantrang.php"); ?>
    