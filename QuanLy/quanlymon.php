<?php require_once("../includes/mysqli_connect.php"); ?>
<?php require ('tao_mon.php');?>
  <?php require ("dautrang.php"); ?>
    <main>
    <?php require ("nav.php"); ?>
      <div class="grid-container">
      <?php require ('navquanly.php');?>
        <div class="grid-item item2">
          <div class="grid-table">
            <form action="quanlymon.php" method="POST">
                <div class="item item-table1"><h3 >TẠO MÔN HỌC</h3></div>
                    <div class="form-group">
                        <div class="item item-table2"><p>Tên môn:</p></div>
                        <div class="item item-table3">
                          <input type="text" value="" name="TenMon" class="form-control" required />
                        </div>
                    </div>
                    <div class="form-group">    
                        <div class="item item-table2"><p>Mã môn:</p> </div>
                        <div class="item item-table3">
                          <input type="text"  value="" maxlength="10" name="MaMon" class="form-control" required />
                        </div>
                    </div>
                    <div class="form-group">     
                        <div class="item item-table2"><p>Mã ngành:</p> </div>
                        <div class="item item-table3">
                            <?php
                            $sql = mysqli_query($dbcon,"select MaNganh from nganh") or die(myqli_error($dbcon));
                            if (mysqli_num_rows($sql) > 0) {
                            $i=0;
                            ?>
                            <select style="width: 300px; class="form-control" name = "MaNganh">
                              <option></option>
                              <?php while($row=mysqli_fetch_assoc($sql)) {
                              $i++; ?>

                              <option><?php echo $row['MaNganh']; ?></option>
                              <?php }
                            }  ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">     
                        <div class="item item-table2"><p>Mã Giảng Viên</p> </div>
                        <div class="item item-table3">
                            <?php
                            $sql = mysqli_query($dbcon,"select MaGV from GiangVien") or die(myqli_error($dbcon));
                            if (mysqli_num_rows($sql) > 0) {
                            $i=0;
                            ?>
                            <select class="form-control" name = "MaGV">
                              <option></option>
                              <?php while($row=mysqli_fetch_assoc($sql)) {
                              $i++; ?>

                              <option><?php echo $row['MaGV']; ?></option>
                              <?php }
                            }  ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">    
                        <div class="item item-table1" style="text-align: center;">
                          <input type="submit" name="tao_mon" class="submit" value="Xác nhận" />
                        </div>
                        </div>
                    </div>    
                <?php echo $message; ?>   
              </from>
          </div>

    </main>
    <?php require ("chantrang.php"); ?>
