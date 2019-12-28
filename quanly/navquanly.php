<!-- <div class="grid-item item1">
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
              <a href="#SubMenu1" data-toggle="collapse" data-parent="#SubMenu1"
                >Quản lý lớp học</a
              >
              <div class="collapse list-group-submenu" id="SubMenu1">
                <a
                  href="../QuanLy/quanlylopmon.php"
                  class="list-group-item"
                  data-parent="#SubMenu1"
                  style="margin-top: 20px;"
                  >Lớp môn học</a
                >
                <a
                  href="../QuanLy/quanlylophp.php"
                  class="list-group-item"
                  data-parent="#SubMenu1"
                  
                  >
                  Lớp học phần</a
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
        </div> -->

        <div class="grid-item item1">
          <ul class="list-group panel">
            <li class="list-group-item " style="text-align: center;">
              <p style="margin:auto">MAIN MENU</p>
            </li>
            <li class="list-group-item ">
              <a href="#SubMenu2" data-toggle="collapse" data-parent="#SubMenu2"
                >Quản lý ngành học</a
              >
              <div class="collapse list-group-submenu" id="SubMenu2">
                <a
                  href="../QuanLy/quanlynganh.php"
                  class="list-group-item"
                  data-parent="#SubMenu1"
                  style="margin-top: 15px;"
                  >Tạo ngành học</a
                >
                <a
                  href="../QuanLy/quanly_CNnganh.php"
                  class="list-group-item"
                  data-parent="#SubMenu2"
                  style="margin-top: 5px;"
                >
                  Cập nhật ngành học</a
                >
              </div>
            </li>
            <li class="list-group-item ">
              <a href="#SubMenu3" data-toggle="collapse" data-parent="#SubMenu3"
                >Quản lý môn</a
              >
              <div class="collapse list-group-submenu" id="SubMenu3">
                <a
                  href="../QuanLy/quanlymon.php"
                  class="list-group-item"
                  data-parent="#SubMenu3"
                  style="margin-top: 15px;"
                  >Thêm môn học</a
                >
                <a
                  href="../QuanLy/quanly_CNmon.php"
                  class="list-group-item"
                  data-parent="#SubMenu3"
                  style="margin-top: 5px;"
                >
                  Cập nhật môn học</a
                >
              </div>
            </li>
            <li class="list-group-item ">
              <a href="#SubMenu1"  data-toggle="collapse" data-parent="#SubMenu1">Quản lý lớp học </a>
      <div class="collapse list-group-submenu" id="SubMenu1">
        
        <a href="#SubSubMenu1" class="list-group-item" data-toggle="collapse" data-parent="#SubSubMenu1">Lớp môn học </a>
        <div class="collapse list-group-submenu list-group-submenu-1" id="SubSubMenu1">
          <a href="../QuanLy/quanlylopmon.php"
           class="list-group-item" 
           data-parent="#SubSubMenu1"
           >* Tạo lớp môn học
          </a>
          <a href="../QuanLy/quanly_CNLmon.php" 
          class="list-group-item" 
          data-parent="#SubSubMenu1"
          >* Cập nhật lớp môn học
        </a>
        </div>
        <a href="#SubSubMenu2" class="list-group-item" data-toggle="collapse" data-parent="#SubSubMenu2">Lớp học phần </a>
        <div class="collapse list-group-submenu list-group-submenu-1" id="SubSubMenu2">
          <a href="../quanly/quanlylophp.php" 
          class="list-group-item" 
          data-parent="#SubSubMenu2"
          >* Tạo lớp học phần
        </a>
          <a href="../QuanLy/quanly_CNLhp.php" 
          class="list-group-item" 
          data-parent="#SubSubMenu2"
          >* Cập nhật lớp học phần
        </a>
        </div>
            </li>
            <li class="list-group-item ">
              <a href="#">Sắp xếp lịch trình</a>
            </li>
            <li class="list-group-item ">
              <a href="../QuanLy/quanlygiangvien.php"
                >Quản lý giảng viên</a>
            </li>
          </ul>
        </div>        