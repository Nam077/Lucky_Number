<?php
session_start();
include 'view/header.php';
include 'view/menu.php';

?>
<div class="pink">
  <div class="b">
    <div class="number-run-wrap">
      <div class="number-box">
        <div class="number-list">
          <span class="number">00000</span>
        </div>

      </div>
    </div>
  </div>
  <div class="bt">
    <button style="width: 40%; float: left;" class="myButton" id="btnQuayNgay">-Quay Ngay-</button>
    <div class="run-box">
      <form action="" method="post">
      <button style="width: 40%; float: right;" name="submit" class="myButton" id="btnQuayNgay">-Xác Nhận-</button>
      </form>
    </div>
  </div>
</div>

<?php

if (isset($_POST['submit'])) {
  if (isset($_SESSION['username_ss'])) {
    $p = $_SESSION['username_ss'];
    $da = mysqli_connect("localhost", "root", "", "random");
    $k = '';
    $event = '';
    $sqc = "SELECT * FROM danhsachtaikhoan WHERE userName = '$p'";
    $mk = mysqli_query($da, $sqc);
    if (mysqli_num_rows($mk) > 0) {
      while ($row = mysqli_fetch_assoc($mk)) {
        $k = $row['Luot_Quay'];
        $_SESSION['Luot_Quay'] = $k;
      }
    }
    if ($_SESSION['Luot_Quay'] > 0) {
      $check = 0;
      date_default_timezone_set('Asia/Ho_Chi_Minh');
      $t = date('Y-m-d H:i:s');
      $db = mysqli_connect("localhost", "root", "", "random");
      $sql = "SELECT * FROM events";
      $result = mysqli_query($db, $sql);
      $tmp = 0;
      if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
              if($t>=$row['start'] & $t<=$row['end']){
                // echo $row['start']. "<br>" .$row['end']. "<br><br>";
                $check = 1;
                $event = $row['title'];
                $_SESSION['$event'] = $event;
                // echo $_SESSION['$event']. "<br>";
              }
          }
      }
      if ($check==1){
        $load = 1;
        $_SESSION['load'] = $load;
        
        echo "<script> window.location.href = 'http://localhost/vqmm/load.php'; </script>";
      }else{
        echo "<SCRIPT>";
        echo "Swal.fire({
        icon: 'error',
        title: 'Thông báo :(',
        text: 'Hiện không có event nào diễn ra !',
      })";
      echo "</SCRIPT>";
      }
    }else {
      echo "<SCRIPT>";
      echo "Swal.fire({
        icon: 'error',
        title: 'Lỗi Rồi :(',
        text: 'Bạn Hết Lượt Chơi Rồi Nhé !',
      })";
      echo "</SCRIPT>";
    }
  }else{
    echo "<SCRIPT>";
    echo "Swal.fire({
      icon: 'error',
      title: 'Lỗi Rồi :(',
      text: 'Bạn Chưa Đăng Nhập!',
      footer: '<a href = http://localhost/vqmm/login.php>Đăng Nhập Tại Đây</a>'
    })";
    echo "</SCRIPT>";
  }
}
?>
<?php
include 'view/footer.php';
?>