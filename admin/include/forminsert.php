<html>

<head>
  <title>Thêm Tài Khoản</title>
  <META name="Author" content="Scorpion">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <script src="sweetalert2.all.min.js"></script>
</head>

<body>
  <form name="myform" method="post" action="user/insert.php" onsubmit="return checkinput();">
    <table class="table table-bordered table-hover table-sortable fluid" id="tab_logic">
      <thead>
        <tr>

          <th class="text-center">
            Username
          </th>
          <th class="text-center">
            Mật Khẩu
          </th>
          <th class="text-center">
            Tên
          </th>
          <th class="text-center">
            Email
          </th>
          <th class="text-center">
            Địa Chỉ
          </th>
          <th class="text-center">
            Lượt Quay
          </th>
          <th class="text-center">
            Xác Nhận
          </th>

        </tr>
      </thead>
      <tbody>
        <tr id='addr0' data-id="0" class="hidden">
          <td>
            <input type="text" id="username" name='username' placeholder='Tên Đăng Nhập' class="form-control" />
          </td>
          <td>
            <input type="text" id="password" name='password' placeholder='Mật Khẩu' class="form-control" />
          </td>
          <td>
            <input type="text" id="hoten" name='hoten' placeholder='Tên' class="form-control" />
          </td>
          <td>
            <input type="text" id="email" name='email' placeholder='Email' class="form-control" />
          </td>

          <td>
            <input type="text " id="diachi" name='diachi' placeholder='Địa Chỉ' class="form-control" />
          </td>
          <td>
            <input type="text" id="luot" name='luot' placeholder='Lượt Quay' class="form-control" />
          </td>


          <td data-name="del">
            <button type="submit" name="insert-submit" class='btn btn-danger btn-sm'><span aria-hidden="true">Thêm</span></button>
          </td>
        </tr>
      </tbody>
    </table>

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
    reg1 = /^[0-9A-Za-z]+[0-9A-Za-z_]*@[\w\d.]+.\w{2,4}$/;
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
      alert("Chưa nhập địa chỉ");
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
