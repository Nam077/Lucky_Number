<?php
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
if (isset($_COOKIE['text'])) {
  $a = date('H:i:s - d/m/Y');
  $b = $_COOKIE['text'];
  $c = "";
  $d = "";
  $k = "";
  $event = $_SESSION['$event'];
  $g = date('d/m/Y');
  if (isset($_SESSION['username_ss'])) {

    $c = $_SESSION['username_ss'];
    $i = $c;
    require_once('bdd.php');
    $sql = "SELECT * FROM danhsachtaikhoan WHERE userName = '$c'";
    $result = mysqli_query($db, $sql);
    $kt = 0;
    // echo $username ." - ".$password."<br>";
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        $j = $row['userName'];
        $c = $row['Name'];
        $d = $row['Email'];
        $k = $row['Luot_Quay'];

        // echo $row['userName'] ." - ".$row['passWord']."<br>";
      }
    }
    $email = $d;
    $sql = "INSERT INTO ds_quay_so(userName, SoMayMan, NgayQuaySo, Email, event) VALUES ('$j','$b','$a','$d','$event')";
    mysqli_query($db, $sql);
    // $k = $k - 1;
    $k = $k - 1;

    require_once('bdd.php');
    $sqm = "UPDATE danhsachtaikhoan SET Luot_Quay = '$k' WHERE userName = '$i'";
    mysqli_query($db, $sqm);
  } else { }
  // $d ='0973685674';
  $e = 'Số May Mắn ' . $_COOKIE['text'] . '<br>Ngày: ' . $a . '<br>Tên: ' . $c . '<br>Email:' . $d .'<br>Sự Kiện: ' .$event;
  $header = 'Chào Bạn';
  $t = $e;
  $_SESSION['mailfile'] = 1;
  $namea = 'Mã QR của Bạn.jpg';
  $bk = urlencode($t);
  $url = 'http://localhost/vqmm/generate.php?text=' . $bk;
  $message = '
                <h3 align="center">Thông Tin Của Bạn</h3>
                <table style= "text-aldin:center;" border="1" width="100%" cellpadding="5" cellspacing="5">
                <tr>
                <td style="background-color: #4CAF50;
                color: white;padding: 20px;" width="30%">Họ Và Tên</td>
                <td style="background-color: #f5f5f5;text-algin:center;font-size:40px;" width="80%">' . $c . '</td>
                </tr>
                <tr>
                <td style="background-color: #4CAF50;
                color: white;padding: 20px;" width="30%">Email Address</td>
                <td style="background-color: #f5f5f5;text-algin:center;font-size:40px;" width="80%">' . $d . '</td>
                </tr>
                <tr>
                <td style="background-color: #4CAF50;
                color: white;padding: 20px;" width="30%">Ngày Quay Số</td>
                <td style="background-color: #f5f5f5;text-algin:center;font-size:40px;" width="80%">' . $a . '</td>
                </tr>
                <tr>
                <td style="background-color: #4CAF50;
                color: white;padding: 20px;" width="30%">Số May Mắn</td>
                <td style="background-color: #f5f5f5;text-algin:center;font-size:40px;" width="80%">' . $_COOKIE['text'] . '</td>
                </tr>
                <tr>
                <td style="background-color: #4CAF50;
                color: white;padding: 20px;" width="30%">Sự Kiện</td>
                <td style="background-color: #f5f5f5;text-algin:center;font-size:40px;" width="80%">'                   . $event . '</td>
                </tr>
                </table>
              ';
  include 'view/mail.php';
} else {
  echo "<script> window.location.href = 'http://localhost/vqmm/index.php'; </script>";
}
?>
<?php
include 'view/headerluu.php';
include 'view/menu.php';
include 'view/footer.php';
?>
</div>
<div class="hh">
  <div id="form_wrapper" style="width: 60%;">
    <div id="form_left">
      <div>
        <img style="width: 100%; margin-top: -10%;" style="width: 20%; height: 50%;" src="generate.php?text=<?php echo $e ?>" alt="">
      </div>
    </div>
    <div id="form_right" style=" margin-top: -10%;;margin-left: -20% ;padding-right:7%; ">
      <h1 style="color: darkred;">Phiếu Số May Mắn</h1>
      <div style="font-size: 10px;">
        <span style="font-size: 30px;">Họ Và Tên: <?php echo  $c; ?></span><br><br>
        <span style="font-size: 30px;">Ngày Lấy Số: <?php echo $g; ?></span><br><br>
        <span style="font-size: 30px;">Số May Mắn: <?php echo $b; ?></span><br><br>
        <span style="font-size: 30px;">Email: <?php echo $d; ?></span><br><br><br>
        <span style="font-size: 30px;">Sự Kiện: <?php echo $event; ?></span><br><br>
      </div>
    </div>
  </div>
  <?php
  if (isset($_SESSION['username_ss'])) {
    echo "<SCRIPT>";
    echo "Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Mã Của Bạn Đã Được Lưu Lại Xin Chúc Mừng',
        showConfirmButton: false,
        timer: 3000
      })";
    echo "</SCRIPT>";
  } else {
    echo "<SCRIPT>";
    echo "Swal.fire({
      icon: 'error',
      title: 'Lỗi Rồi :(',
      text: 'Bạn Chưa Đăng Nhập!',
      footer: '<a href = http://localhost/vqmm/login.php>Đăng Nhập Tại Đây</a>'
      
    })";
    echo "</SCRIPT>";
    echo "<script>
    setTimeout(function(){
        window.location.href = 'http://localhost/vqmm/login.php' ;
    }, 1000); </script>";
  }
  ?>
  <?php
  
  setcookie('text', "", time() - 3600);
  unset($_SESSION['mailfile']);
  ?>