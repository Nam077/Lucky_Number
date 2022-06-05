<div class="container"  >
  <div id="particles-js" class="main-form-box">
    <div class="md-form" >
        <div class="container" style="text-align: center; margin-left: 0%;">
          <div  class="row">
            <div class="col-md-6 offset-md-3">
              <div class="panel panel-login">
                <div class="panel-heading" style="margin-top: 17%;">
                    <div class="row">
                      <div class="col-lg-6 col-sm-6 col-xl-6">
                        <a href="#" class="active" id="login-form-link">Đăng Nhập</a>
                      </div>
                    <div class="col-lg-6 col-sm-6 col-xl-6">
                      <a href="#" id="register-form-link">Đăng Ký</a>
                    </div>
                    <div class="or">OR</div>
                    </div>
                    </div>
                    <div class="panel-body">
                      <div class="row">
                        <div class="col-lg-12">
                          <form id="login-form" action="#" method="post" role="form" style="display: block;">
                            <div class="form-group">
                              <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Tên Đăng Nhập" value="" required="">
                            </div>
                            <div class="form-group">
                              <input type="password" name="password" id="pass" tabindex="2" class="form-control" placeholder="Mật Khẩu" required="">
                            </div>
                            <div class="che-box">
                              <input name="checkbox" type="checkbox" tabindex="3" id="remember"> <span></span>
                              Lưu Mật Khẩu
                              </label>
                            </div>
                            <div class="form-group">
                              <div class="row">
                                <div class="col-sm-6 offset-sm-3">
                                  <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="row">
                                <div class="col-lg-12">
                                  <div class="text-center">
                                    <a href="quenmk.php" tabindex="5" class="forgot-password">Quên Mật Khẩu</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </form>
                          <form id="register-form" action="#" method="post" role="form" style="display: none;">
                            <div class="form-group">
                              <input type="text" name="username_dk" id="username" tabindex="1" class="form-control" placeholder="Tên Đăng Nhập" value="" required="">
                            </div>
                            <div class="form-group">
                              <input type="email" name="email_dk" id="email" tabindex="1" class="form-control" placeholder="Email" value="" required="">
                            </div>
                            <div class="form-group">
                              <input type="text" name="ten_dk" id="add" tabindex="2" class="form-control" placeholder="Tên" required="">
                                </div>
                              <div class="form-group">
                              <input type="password" name="pass_dk" id="password" tabindex="2" class="form-control" placeholder="Mật Khẩu" required="">
                            </div>
                            <div class="form-group">
                              <input type="password" name="pass2_dk" id="confirm-password" tabindex="2" class="form-control" placeholder="Xác Nhận Mật Khẩu" required="">
                            </div>
                            <div class="form-group">
                              <input type="text" name="address_dk" id="add" tabindex="2" class="form-control" placeholder="Địa Chỉ" required="">
                            </div>
                           
                            <div style="clear: left;clear: right; margin-top: 5%;" class="form-group">
                              <div class="row">
                                <div class="col-sm-6 offset-sm-3">
                                  <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Gửi Mã">
                                </div>
                              </div>
                            </div>										
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>	
          </div>
        </div>
      </div>
    </div>
  </body>
  <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/index.js"></script>
      <script src="js/form.js"></script>
  </script>
  <?php
    include 'view/footer.php';
  ?>
</html> 