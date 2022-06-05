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
                    <strong>Số May Mắn</strong>
                    <input value="<?php echo $smm ?>" readonly type="text" id="password" name='password' placeholder='Mật Khẩu' class="form-control" />
                    <strong>Ngày Quay Số</strong>
                    <input value="<?php echo $date ?>" readonly type="text" id="hoten" name='hoten' placeholder='Tên' class="form-control" />
                    <strong>Email</strong>
                    <input value="<?php echo $email ?>" type="text" id="email" name='email' placeholder='Email' class="form-control" />
                    <strong>Sự Kiện</strong>
                    <input value="<?php echo $event ?>" type="text " id="diachi"  name='event' placeholder='Sự Kiện' class="form-control" />
                    <br>
                </legend>
                <div class="container col-md-9" style="margin: 0 auto; text-align: center; margin-top: -5%;">
                    <button name='submit_edit' type="submit" class="btn btn-success btn-sm">Xác Nhận</button>
                    <button type="reset" class="btn btn-primary btn-sm">Làm Mới</button>
                </div>
            </form>
</body>
<script language="JavaScript">
  function checkinput() {
    username = document.myform.username;
    password = document.myform.password;
    hoten = document.myform.hoten;
    diachi = document.myform.diachi;
    luot = document.myform.luot;
    email = document.myform.email;
    dienthoai = document.myform.dienthoai;
    reg1 =/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/; 
    testmail = reg1.test(email.value);
    if (username.value == "") {
      alert("Hãy chọn tên đăng nhập");
      username.focus();
      return false;
    }
    if (password.value == "") {
      alert("Chưa nhập mật khẩu");
      password.focus();
      return false;
    }
    if (hoten.value == "") {
      alert("Hãy nhập vào họ tên của bạn");
      hoten.focus();
      return false;
    }
    
    if (!testmail) {
      alert("Địa chỉ email không hợp lệ");
      email.focus();
      return false;
    }
    if (diachi.value == "") {
      alert("Chưa nhập Event");
      diachi.focus();
      return false;
    }
    if (luot.value == "") {
      alert("Chưa nhập lượt");
      diachi.focus();
      return false;
    }

    if (isNaN(luot.value)) {
      alert("Lượt Phải Là Số");
      luot.focus();
      return false;
    } 
    return true;
  }
</script>

</html>
