<?php require_once("../includes/mysqli_connect.php"); ?>
<?php require ('tao_lopmon.php'); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>QuanLyLopMon</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/stylex.css" />
  </head>
  <body>
    <header>
      <div class="grid-container-header">
        <div class="grid-item">
          <img
            height="58"
            width="351"
            style="transform: translate(5%, 30%); "
            src="../images/logo.png"
            alt="logo"
          />
        </div>
        <div class="grid-item">
          <div>
            <h2>
              CỔNG THÔNG TIN ĐÀO TẠO <br />
              ĐẠI HỌC THỦY LỢI
            </h2>
          </div>
        </div>
        <div class="grid-item"></div>
      </div>

      <div id="box_user">
        <div id="PageHeader_Panel">
          <p>
            <span id="PageHeader_lblUserFullName" style="font-weight:bold;"
              >Đinh Việt Đức(175A071379)</span
            >
            <span
              id="PageHeader_lblRoleTitle "
              style="color: #bcbabe; font-size: 15px;"
              >Vai trò:</span
            >
            <span id="PageHeader_lblUserRole">Giảng viên</span>

            <a id="PageHeader_lbNewmessage" href="#">Hộp tin nhắn</a>
          </p>
        </div>
      </div>
    </header>
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
    <footer>
      <div><h2>© 2019 - TRƯỜNG ĐẠI HỌC THỦY LỢI</h2></div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script src="../js/script.js"></script>

    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
