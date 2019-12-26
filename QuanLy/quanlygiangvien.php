
  <?php require ("dautrang.php"); ?>
    <main>
      <div class="grid-container">
      <?php require ('navquanly.php');?>
        <div class="grid-item item2">
          <div class="grid-container-table">
            <div class="item item-table1"><h3>QUẢN LÝ GIẢNG VIÊN</h3></div>
            <div class="item item-table2"><p>Mã giảng viên:</p></div>
            <div class="item item-table3">
              <input
                type="text"
                name="FirstName"
                value=""
                class="textbox"
                maxlength="10"
              />
            </div>
            <div class="item item-table2"><p>Tên giảng viên:</p></div>
            <div class="item item-table3">
              <input
                type="text"
                name="FirstName"
                value=""
                class="textbox"
                readonly
              />
            </div>
            <div class="item item-table2"><p>Ngành giảng dạy:</p></div>
            <div class="item item-table3">
              <select name="cars" style="width: 300px;">
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
                <option value="fiat">Fiat</option>
                <option value="audi">Audi</option>
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
