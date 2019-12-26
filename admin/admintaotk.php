<?php require ("dautrang.php"); ?>
    <main>
      <div class="grid-container">
      <?php require ("navadmin.php"); ?>
        <div class="grid-item item2">
          <div class="grid-container-table">
            <div class="item item-table1"><h3>TẠO TÀI KHOẢN</h3></div>
            <div class="item item-table2"><p>Tên đăng nhập:</p></div>
            <div class="item item-table3">
              <input
                type="text"
                name="FirstName"
                value=""
                class="textbox"
                maxlength="10"
              />
            </div>
            <div class="item item-table2"><p>Mật khẩu:</p></div>
            <div class="item item-table3">
              <input
                type="password"
                name="FirstName"
                value=""
                class="textbox"
              />
            </div>
            <div class="item item-table2"><p>Tên người dùng:</p></div>
            <div class="item item-table3">
              <input type="text" name="FirstName" value="" class="textbox" />
            </div>
            <div class="item item-table2"><p>Địa chỉ:</p></div>
            <div class="item item-table3">
              <input type="text" name="FirstName" value="" class="textbox" />
            </div>
            <div class="item item-table2"><p>Email:</p></div>
            <div class="item item-table3">
              <input type="text" name="FirstName" value="" class="textbox" />
            </div>
            <div class="item item-table2"><p>Ngày sinh:</p></div>
            <div class="item item-table3">
              <input type="date" name="FirstName" value="" class="textbox" />
            </div>
            <div class="item item-table2"><p>Loại tài khoản:</p></div>
            <div class="item item-table3">
              <select name="cars" style="width: 300px;">
                <option value="volvo">Quản lý</option>
                <option value="saab">Giảng viên</option>
                <option value="fiat">Quản trị viên</option>
              </select>
            </div>

            <div class="item item-table1" style="text-align: center;">
              <input type="submit" class="submit" value="Xác nhận" />
            </div>
          </div>
        </div>
      </div>
    </main>
    <?php require ("chantrang.php"); ?>
