<html>

<head>
  <title>Check Form Register</title>
  <META name="Author" content="Scorpion">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <script src="sweetalert2.all.min.js"></script>
</head>

<body>
  <form name="myform" method="post" onsubmit="return checkinput();">
                <legend>
                    <strong>Tên Tài Khoản</strong>
                    <input value="<?php echo $username ?>" readonly type="text" id="username" name='username' placeholder='Tên Đăng Nhập' class="form-control" />
                    <strong>Email</strong>
                    <input value="<?php echo $email ?>" readonly type="text" id="email" name='email' placeholder='Email' class="form-control" />
                    <strong>Số May Mắn</strong>
                    <input value="<?php echo $smm ?>" readonly type="text" id="password" name='password' placeholder='Mật Khẩu' class="form-control" />
                    <strong>Họ Và Tên</strong>
                    <input value="<?php echo $name ?>" readonly type="text" id="hoten" name='hoten' placeholder='Tên' class="form-control" />
                    <strong>Event</strong>
                    <input value="<?php echo $event ?>" readonly type="text " id="diachi" name='diachi' placeholder='Địa Chỉ' class="form-control" />
                    <strong>Ngày Quay Số</strong>
                    <input value="<?php echo $date ?>" readonly type="text" id="luot" name='luot' placeholder='Lượt Quay' class="form-control" />
                    
                    <strong>Nội Dung</strong>
                
                    <textarea class="form-control" value="" rows="7"><?php echo $o ?></textarea>
                </legend>
                <div class="container col-md-9" style="margin: 0 auto; text-align: center; margin-top: 0%;">
                    <button name='submit_mail' type="submit" class="btn btn-success btn-sm">Gửi</button>
                    <button type="reset" class="btn btn-primary btn-sm">Làm Mới</button>
                </div>
            </form>
</body>
 

</html>
