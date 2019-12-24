<?php require_once("../includes/mysqli_connect.php"); ?>
<?php
	
    $message = '';
	if (isset($_POST["tao_nganh"])) {
		//lấy thông tin từ các form bằng phương thức POST
		$MaNganh = $_POST["MaNganh"];
		$TenNganh = $_POST["TenNganh"];
		        

		$sql = "INSERT INTO nganh VALUES ('$MaNganh', '$TenNganh')";
		// thực thi câu $sql với biến dbcon lấy từ file connection.php
        mysqli_set_charset($dbcon,$sql);
        mysqli_query($dbcon,$sql);
        
        
		$message = '<label class="text-success">Tạo ngành học thành công</label>';
		
	}
    
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>QuanLyNganh</title>
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
        <div class="grid-item item1">
          <ul class="list-group">
            <li class="list-group-item " style="text-align: center;">
              <p style="margin:auto">MAIN MENU</p>
            </li>
            <li class="list-group-item ">
              <a href="../QuanLy/quanlynganh.php">Quản lý ngành học</a>
            </li>
            <li class="list-group-item ">
              <a href="../QuanLy/quanlymon.php">Quản lý môn</a>
            </li>
            <li class="list-group-item ">
              <a href="../QuanLy/quanlylophp.php" data-toggle="collapse" data-parent="#SubMenu1"
                >Quản lý lớp học</a
              >
              <div class="collapse list-group-submenu" id="SubMenu1">
                <a
                  href="../QuanLy/quanlylopmon.php"
                  class="list-group-item"
                  data-parent="#SubMenu1"
                  style="margin-top: 5px;"
                  >Lớp môn học</a
                >
                <a href="#" class="list-group-item" data-parent="#SubMenu1"
                  >Lớp học phần</a
                >
              </div>
            </li>
            <li class="list-group-item ">
              <a href="#">Sắp xếp lịch trình</a>
            </li>
            <li class="list-group-item ">
              <a href="#">Quản lý giảng viên</a>
            </li>
          </ul>
        </div>
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



