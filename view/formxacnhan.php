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
                      <a class="active" href="#" id="register-form-linsk">Xác Nhận </a>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-xl-6">
                      <a class="active" href="#" id="register-form-linsk">Tài Khoản </a>
                    </div>
                    <div class="or"></div>
                    </div>
                    </div>
                    <div class="panel-body">
                      <div class="row">
                        <div class="col-lg-12">
                          <form id="login-form" action="#" method="post" role="form" style="display: block;">
                          <div class="form-group">
                              <h4 style="color: white;">Mã Đã Được Gửi Về Qua Mail  <?php echo $email?></h4>
                            </div>
                            <div class="form-group">
                              <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Tên Đăng Nhập" value=" <?php echo $username?>" required="">
                            </div>
                            <div class="form-group">
                              <input type="password" name="ma" id="pass" tabindex="2" class="form-control" placeholder="Mã Xác Nhận" required="">
                            </div>
                           
                            <div class="form-group">
                              <div class="row">
                                <div class="col-sm-6 offset-sm-3">
                                  <input type="submit" name="xacnhanma" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Xác Nhận">
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                             
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