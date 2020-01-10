<?php require_once("../includes/mysqli_connect.php"); ?>
<?php require ('tao_lophp.php');?>  
<?php require ("../includes/dautrang.php"); ?>
    <main>
    <?php require ("../includes/nav.php"); ?>
      <div class="grid-container">
        <?php require ('navquanly.php');?>
        <form action="quanlylophp.php" method="POST">
            <div class="grid-item item2">
              <div class="grid-container-table">
                <div class="item item-table1"><h3 >TẠO LỚP HỌC PHẦN</h3></div>
                <div class="item item-table2"><p>Mã lớp học phần :</p></div>
                <div class="item item-table3">
                  <input type="text"  value="" name="MaLHP" class="form-control" required />
                </div>
                <div class="item item-table2"><p>Tên Lớp Học Phần :</p> </div>
                <div class="item item-table3">
                  <input type="text"  value="" name="TenLopHP" class="form-control" required />
                </div>
                <div class="item item-table2"><p>Mã Thời Gian Học:</p> </div>
                <div class="item item-table3">
                <?php
								$sql = mysqli_query($dbcon,"select MaTGH from thoigianhoc") or die(myqli_error($dbcon));
								if (mysqli_num_rows($sql) > 0) {
								$i=0;
								?>
								<select class="form-control" name = "MaTGH">
									<option></option>
									<?php while($row=mysqli_fetch_assoc($sql)) {
									$i++; ?>

									<option><?php echo $row['MaTGH']; ?></option>
									<?php }}  ?>
								</select>
                </div>
                
                <div class="item item-table4" style="text-align: center;">
                  <input type="submit" class="submit" name="tao_lophp" value="Xác nhận" />
                </div>
              </div>
              </div>
              <?php echo $message; ?>   
            </from>
    </main>
    <?php require ("../includes/dautrang.php"); ?>
