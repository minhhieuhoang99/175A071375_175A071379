<?php require_once("../includes/mysqli_connect.php"); ?>
<?php require ('tao_nganh.php');?>


  <?php require ("dautrang.php"); ?>
    <main>
      <div class="grid-container">
      <?php require ('navquanly.php');?>
        <div class="grid-item item2">
          <div class="grid-container-table"  >
              <form action="quanlynganh.php" method="POST">
                  <div class="item item-table1"><h3 >TẠO NGÀNH HỌC</h3></div>
                  <div class="form-group">
                      <div class="item item-table2"><p>Tên ngành:</p></div>
                      <div class="item item-table3"><input type="text"  value=""  name="TenNganh" class="form-control" required  /></div>
                  </div> 
                  <div class="form-group"> 
                      <div class="item item-table4"><p>Mã ngành:</p></div>
                      <div class="item item-table5"><input type="text"  value="" maxlength="10" name="MaNganh" class="form-control" required /></div></div> 
                  <div class="form-group"> 
                      <div class="item item-table6" style="text-align: center;">
                      <input type="submit" class="submit" name="tao_nganh"  value="Tạo ngành" />            </div>          
                  </div> 
                  <?php echo $message; ?>              
					    </form>
              </div>              
            </div>            
          

    </main>
    <?php require ("chantrang.php"); ?>



