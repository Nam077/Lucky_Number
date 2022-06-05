<html>

<head>
  <title>Thêm Tài Khoản</title>
  <META name="Author" content="Scorpion">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <script src="sweetalert2.all.min.js"></script>
</head>

<body>
  <form name="myform" method="post" action="dsquayso/insert.php" onsubmit="return checkinput();">
    <table class="table table-bordered table-hover table-sortable fluid" id="tab_logic">
      <thead>
        <tr>

          <th class="text-center">
            Username
          </th>
          <th class="text-center">
            Số May Mắn
          </th>
          <th class="text-center">
            Ngày Quay Số
          </th>
          <th class="text-center">
            Sự Kiện
          </th>
          <th class="text-center">
            Email
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
            <input type="text" id="smm" name='smm' minlength= 5 maxlength="5" placeholder='Số May Mắn' class="form-control" />
          </td>
          <td>

            <input type="datetime-local" data-date-format="DD MMMM YYYY" id="dateTime" name='date' required placeholder='Ngày Quay Số' class="form-control" />
          </td>


          <td>
            <input type="text " id="event" name='event' placeholder='Sự Kiện' class="form-control" />
          </td>
          <td>
            <input type="text" id="email" name='email' placeholder='Email' class="form-control" />
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
    dateTime = document.getElementById("dateTime").value;
    username = document.myform.username;
    hoten = document.myform.hoten;
    diachi = document.myform.event;
    luot = document.myform.smm;
    email = document.myform.email;
    value = document.getElementById('smm').value;
    reg1 = /^[0-9A-Za-z]+[0-9A-Za-z_]*@[\w\d.]+.\w{2,4}$/;
    testmail = reg1.test(email.value);
    k = luot.length;
    if (username.value == "") {
      alert("Hãy chọn tên đăng nhập");
      username.focus();
      return false;
    }
    if (luot.value == "") {
      alert("Chưa nhập số may mắn");
      diachi.focus();
      return false;
    }
      if (isNaN(luot.value)) {
        alert("Số May Mắn Là Số");
        luot.focus();
        return false;
      }

      if (diachi.value == "") {
        alert("Chưa nhập Sự Kiện");
        diachi.focus();
        return false;
      }
      if (!testmail) {
        alert("Địa chỉ email không hợp lệ");
        email.focus();
        return false;
      }
      return true;
    }
</script>

</html>
