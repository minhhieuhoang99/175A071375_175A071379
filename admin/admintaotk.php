<?php require ("dautrang.php"); ?>
    <main>
	<?php require ("nav.php"); ?>
      <div class="grid-container">
      <?php require ("navadmin.php"); ?>
        <div class="grid-item item2">
          <div class="">
              <body>
              <div class="container" style="margin-left:30px">
                  
                      
                      <?php
                          if ($_SERVER['REQUEST_METHOD'] == 'POST') {                                //#1
                          require('process-register-page.php');
                          } // End of the main Submit conditional.
                      ?>
                      <div class="col-sm-8">
                          <h2 class="h2 text-center">Tạo Tài Khoản</h2>
                          <form action="admintaotk.php" method="post" onsubmit="return checked();" name="regform" id="regform">
                              <div class="form-group row">
                                  <label for="tentaikhoan" class="col-sm-4 col-form-label">Tên Tài Khoản:</label>
                                  <div class="col-sm-8">
                                      <input type="text" class="form-control" id="tentaikhoan" name="tentaikhoan"
                                          placeholder="Tên Tài Khoản" maxlength="30" required
                                          value="<?php if (isset($_POST['tentaikhoan'])) echo $_POST['tentaikhoan']; ?>">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label for="ten" class="col-sm-4 col-form-label">Tên:</label>
                                  <div class="col-sm-8">
                                      <input type="text" class="form-control" id="ten" name="ten"
                                          placeholder="Tên" maxlength="30" required
                                          value="<?php if (isset($_POST['ten'])) echo $_POST['ten']; ?>">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label for="diachi" class="col-sm-4 col-form-label">Địa Chỉ:</label>
                                  <div class="col-sm-8">
                                      <input type="text" class="form-control" id="diachi" name="diachi"
                                          placeholder="Địa Chỉ" maxlength="40" required
                                          value="<?php if (isset($_POST['diachi'])) echo $_POST['diachi']; ?>">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label for="email" class="col-sm-4 col-form-label">E-mail:</label>
                                  <div class="col-sm-8">
                                      <input type="email" class="form-control" id="email" name="email" placeholder="E-mail"
                                          maxlength="60" required
                                          value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label for="ngaysinh" class="col-sm-4 col-form-label">Ngày Sinh:</label>
                                  <div class="col-sm-8">
                                      <input type="date" class="form-control" id="ngaysinh" name="ngaysinh" placeholder="Ngày Sinh"
                                          maxlength="60" required
                                          value="<?php  echo date('Y-m-d') ; ?>">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label for="ngaysinh" class="col-sm-4 col-form-label">Cấp Độ:</label>
                                  <div class="col-sm-8">
                                       <select class="form-control" id="capdo" name="capdo" placeholder=""
                                            maxlength="60" required
                                            value="">
                                            <option  value="3">Giảng Viên</option>
                                            <option  value="2">Quản Lý</option>
                                            
                                        </select>
                                    </div>
                                  </div>
                              <div class="form-group row">
                                  <label for="password1" class="col-sm-4 col-form-label">Mật Khẩu:</label>
                                  <div class="col-sm-8">
                                      <input type="password" class="form-control" id="password1" name="password1"
                                          placeholder="Mật Khẩu" minlength="8" maxlength="12" required
                                          value="<?php if (isset($_POST['password1'])) echo $_POST['password1']; ?>">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label for="password2" class="col-sm-4 col-form-label">Nhập Lại Mật Khẩu:</label>
                                  <div class="col-sm-8">
                                      <input type="password" class="form-control" id="password2" name="password2"
                                          placeholder="Nhập Lại Mật Khẩu" minlength="8" maxlength="12" required
                                          value="<?php if (isset($_POST['password2'])) echo $_POST['password2']; ?>">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <div class="col-sm-6">
                                      <input id="submit" class="btn btn-primary" type="submit" name="submit" value="Register">
                                  </div>
                              </div>
                          </form>
                      </div>
                      <!-- Right-side Column Content Section -->
                      <?php
              
                      if(!isset($errorstring)) {
                          echo '<aside class="col-sm-2">';
                          
                          echo '</aside>';
                          echo '</div>';
                          echo '<footer class="jumbotron text-center row col-sm-14"
                              style="padding-bottom:1px; padding-top:8px;">';
                      }
                      else
                      {
                          echo '<footer class="jumbotron text-center col-sm-12"
                          style="padding-bottom:1px; padding-top:8px;">';
                      }
                      
                      ?>
                      </footer>
                  </div>
              </body>
          </div>
        </div>
      </div>
    </main>
    <?php require ("chantrang.php"); ?>
