<?php session_start(); ?>
<?php require ( 'mysqli_connect.php'); ?>
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

    
<?php
          
          if(isset($_SESSION['email']))
          {
            $email = $_SESSION['email'];
            
            $sql = "SELECT * from taikhoan where email = '$email'";
            $query = mysqli_query($dbcon,$sql);
            $data = mysqli_fetch_array($query);
            $id = $data['MaTK'];
            

            if($data['CapDo'] == 2)
            {
              $MaQL = $_SESSION['MaQL'];
              $data['HoTenQL'] = $_SESSION['HoTenQL'];
              $sql = "SELECT * from quanly where MaQL = '$MaQL'";
              $query = mysqli_query($dbcon,$sql);
              $data = mysqli_fetch_array($query);
              echo "<div style='color:green; padding:5px 20px; font-size: 15px'>" .$data['HoTenQL']. " (".$MaQL.") <span style='color:#000'>  Vai trò:</span> Quản lý</div>";
            }

            else if($data['CapDo'] == 3)
            {
              $MaGV = $_SESSION['MaGV'];
              $sql = "SELECT * from giangvien where MaGV = '$MaGV'";
              $query = mysqli_query($dbcon,$sql);
              $data = mysqli_fetch_array($query);
              echo "<div style='color:green; padding:5px 20px; font-size: 15px'>" .$data['HoTenGV']. " (".$MaGV.") <span style='color:#000'>  Vai trò:</span> Giảng viên</div>";

            }

            else
            {
              echo "<div style='color:blue; padding:5px 30px;'> Khách </div>";
            }
          }

          else
          {
            echo "<div style='color:blue; padding:5px 30px;'> Khách </div>";
          }
          
          ?>