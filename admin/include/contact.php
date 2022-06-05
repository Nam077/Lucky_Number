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
                    <strong>Tên Người Gửi</strong>
                    <input value="<?php echo $name ?>" readonly type="text" id="username" name='username' placeholder='Tên Đăng Nhập' class="form-control" />
                    <strong>Email</strong>
                    <input value="<?php echo $email ?>" readonly type="text" id="email" name='email' placeholder='Email' class="form-control" />       
                    <strong>Nội Dung</strong>
                    <textarea class="form-control" readonly value="" rows="4"><?php echo $text ?></textarea>
                    <strong> Trả Lời</strong>
                    <textarea name ='traloi' class="form-control" value="" rows="4"></textarea>
                </legend>
                <div class="container col-md-9" style="margin: 0 auto; text-align: center; margin-top: 0%;">
                    <button name='submit_mail' type="submit" class="btn btn-success btn-sm">Gửi</button>
                    <button type="reset" class="btn btn-primary btn-sm">Làm Mới</button>
                </div>
            </form>
</body>
 

</html>
