<?php require_once("../includes/mysqli_connect.php"); ?>
<?php require ('tao_lopmon.php'); ?>

  <?php require ("dautrang.php"); ?>
    <main>
      <div class="grid-container">
        <?php require ('navquanly.php');?>
        <div class="grid-item item2">
        <form action="quanlylopmon.php" method="POST">
          <div class="grid-container-table">
            <div class="item item-table1"><h3 >TẠO LỚP MÔN HỌC</h3></div>
            <div class="item item-table2"><p>Tên lớp môn:</p></div>
            <div class="item item-table3">
              <input type="text"  value="" name="TenLopMon" class="form-control" required  />
            </div>
            <div class="item item-table4"><p>Mã lớp môn:</p> </div>
            <div class="item item-table5">
              <input type="text" value="" maxlength="10" name="MaLTM" class="form-control" required  />
            </div>
            <div class="item item-table6"><p>Mã Môn:</p> </div>
            <div class="item item-table7">
                            <?php
                            $sql = mysqli_query($dbcon,"select MaMon from mon") or die(myqli_error($dbcon));
                            if (mysqli_num_rows($sql) > 0) {
                            $i=0;
                            ?>
                            <select style="width: 300px; class="form-control" name = "MaMon">
                              <option></option>
                              <?php while($row=mysqli_fetch_assoc($sql)) {
                              $i++; ?>

                              <option><?php echo $row['MaMon']; ?></option>
                              <?php }
                            }  ?>
                            </select>
            </div>
          
            <div class="item item-table8" style="text-align: center;">
              <input type="submit" name="tao_lopmon" class="submit" value="Xác nhận" />
            </div>
            
          </div>
          <?php echo $message; ?> 
          </form>
          </div>
          
                             
    </main>
    <?php require ("chantrang.php"); ?>
