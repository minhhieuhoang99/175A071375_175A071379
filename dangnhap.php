<!DOCTYPE html>
<html lang="en">
  <head>
    <title>DangNhap</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/stylelogin.css" />
  </head>
  <body>
    <header>
      <div class="grid-container-header">
        <div class="grid-item">
          <img
            height="58"
            width="351"
            style="transform: translate(5%, 30%); "
            src="images/logo.png"
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
      <div class="wrapper fadeInDown">
        <div id="formContent">
          <!-- Login Form -->
          <div><h2>ĐĂNG NHẬP</h2></div>
		  <?php
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {                                //#1
			require('chay_dangnhap.php');
			} // End of the main Submit conditional.
		  ?>
          <form action="dangnhap.php" method="post" name="loginform" id="loginform" >
            <input type="text" class="form-control" id="email" name="email" placeholder="Email"
				maxlength="30" required
				value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>"
			/>
            <input type="password" class="form-control" id="password" name="password"
					placeholder="Password" maxlength="40" required
					value="<?php if (isset($_POST['password'])) echo $_POST['password']; ?>"
            />
            <input id="submit" class="btn btn-primary" type="submit" name="submit" value="Đăng nhập">
          </form>

          <!-- Remind Passowrd -->
          <div id="formFooter">
            <a class="underlineHover" href="#">Quên Mật Khẩu ?</a>
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
    <script src="js/script.js"></script>

    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
