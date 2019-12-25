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
          <div class="grid-container-table">
            <div class="item item-table1"><h3 >TẠO LỚP MÔN HỌC</h3></div>
            <div class="item item-table2"><p>Mã lớp học phần:</p></div>
            <div class="item item-table3">
              <input type="text" name="FirstName" value="" class="textbox" />
            </div>
            <div class="item item-table2"><p>Năm học:</p> </div>
            <div class="item item-table3">
              <input type="text" name="LastName" value="" maxlength="4" class="textbox" minlength="4" maxlength="4"/>
            </div>
            <div class="item item-table2"><p>Học kì:</p> </div>
            <div class="item item-table3">
                <select class="select" name="cars" style="width: 300px;">
                    <option class="select" value="volvo">HK I</option class="select">
                    <option class="select" value="saab">HK II</option>
                    <option class="select" value="fiat">HK Bổ sung</option>
                  
                  </select>
            </div>
            <div class="item item-table2"><p>Giai đoạn:</p> </div>
            <div class="item item-table3">
                Bắt đầu: <input type="date" name="bday">
                Kết thúc: <input type="date" name="bday">
            </div>
            <div class="item item-table4" style="text-align: center;">
              <input type="submit" class="submit" value="Xác nhận" />
            </div>
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
