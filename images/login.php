<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    
    <link rel="stylesheet" href="css/stylemenu.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css"> 
    <link rel="stylesheet" href="css/all.min.css">  	
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/custom.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan&display=swap" rel="stylesheet">

</head>
<body>
    <div>
        <div>
        <nav>
        <label class="logo">QUAYSOMAYMAN</label>
        <ul>
          <li><a class="active" href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">Feedback</a></li>
        </ul>
        <label id="icon"><i class="fas fa-bars"></i></label>
      </nav>
        </div>
        <div>
            <div id="particles-js" class="main-form-box">
                <div class="md-form">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-6 offset-md-3">
                        <div class="panel panel-login">
                          <div class="logo-top">
                            <a href="#"><img src="images/logo.png" alt="" /></a>
                          </div>
                          <div class="panel-heading">
                            <div class="row">
                              <div class="col-lg-6 col-sm-6 col-xl-6">
                                <a href="#" class="active" id="login-form-link">Login</a>
                              </div>
                              <div class="col-lg-6 col-sm-6 col-xl-6">
                                <a href="#" id="register-form-link">Register</a>
                              </div>
                              <div class="or">OR</div>
                            </div>
                          </div>
                          <div class="panel-body">
                            <div class="row">
                              <div class="col-lg-12">
                                <form id="login-form" action="#" method="post" role="form" style="display: block;">
                                  <div class="form-group">
                                    <label class="icon-lp"><i class="fas fa-user-tie"></i></label>
                                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="" required="">
                                  </div>
                                  <div class="form-group">
                                    <label class="icon-lp"><i class="fas fa-key"></i></label>
                                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" required="">
                                  </div>
                                  <div class="che-box">
                                    <label class="checkbox-in">
                                      <input name="checkbox" type="checkbox" tabindex="3" id="remember"> <span></span>
                                      Remember Me
                                    </label>
                                  </div>
                                  <ul>
                                    <li>
                                      <button class="fb"><i class="fab fa-facebook-f"></i> Connect with Facebook</button>
                                    </li>
                                    <li>
                                      <button class="tw"><i class="fab fa-twitter"></i> Connect with Twitter</button>
                                    </li>
                                  </ul>
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
                                          <a href="#" tabindex="5" class="forgot-password">Forgot Password?</a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </form>
                                <form id="register-form" action="#" method="post" role="form" style="display: none;">
                                  <div class="form-group">
                                    <label class="icon-lp"><i class="fas fa-user-tie"></i></label>
                                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="" required="">
                                  </div>
                                  <div class="form-group">
                                    <label class="icon-lp"><i class="fas fa-envelope"></i></label>
                                    <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="" required="">
                                  </div>
                                  <div class="form-group">
                                    <label class="icon-lp"><i class="fas fa-key"></i></label>
                                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" required="">
                                  </div>
                                  <div class="form-group">
                                    <label class="icon-lp"><i class="fas fa-key"></i></label>
                                    <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password" required="">
                                  </div>
                                  <ul>
                                    <li>
                                      <button class="fb"><i class="fab fa-facebook-f"></i> Connect with Facebook</button>
                                    </li>
                                    <li>
                                      <button class="tw"><i class="fab fa-twitter"></i> Connect with Twitter</button>
                                    </li>
                                  </ul>
                                  
                                  <div class="che-box">
                                    <label class="checkbox-in"> 
                                      <input name="checkbox" type="checkbox"> <span></span>I agree to the <a href="#"> Terms and Conditions </a> and <a href="#">Privacy Policy </a>
                                    </label>
                                  </div>
                                  
                                  <div class="form-group">
                                    <div class="row">
                                      <div class="col-sm-6 offset-sm-3">
                                        <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
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
    <script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/particles.min.js"></script>
<script src="js/index.js"></script>
<script src="js/form.js"></script>
	
	</script>
</body>
</html>