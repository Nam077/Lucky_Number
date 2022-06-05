<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
$p = 'LOGIN';
$t = '';
if (isset($_SESSION['username_ss'])) {
  $p = $_SESSION['username_ss'];
  $t = 'Đăng Xuất';
}
?>
<nav style="position: fixed; top: 0;left: 0;z-index: 3;">
  <label class="logo">QUAYSOMAYMAN</label>
  <ul>
    <li class='active'><a href="http://localhost/vqmm/index.php">Trang Chủ</a></li>
    <li><a href="http://localhost/vqmm/gioithieu.php">Giới Thiệu</a></li>
    <li><a href="http://localhost/vqmm/dstrungthuong.php">DS Trúng Thưởng</a></li>
    <li><a href="<?php
            if (isset($_SESSION['username_ss'])) {
              echo "http://localhost/vqmm/user.php";
            } else {

              echo "http://localhost/vqmm/login.php ";
            }

            ?>"><?php echo "$p" ?></a></li>
    <li><a href="http://localhost/vqmm/contact.php">Hỗ Trợ</a></li>
    <?php
    if (isset($_SESSION['username_ss'])) {
      $n = $_SESSION['username_ss'];
      if ($n == 'admin') {
        $t = 'Quay Số';
        echo "<li><a href='http://localhost/vqmm/quaysoadm.php'> $t </a></li>";
      }
    }
    ?>
    <?php
    if (isset($_SESSION['username_ss'])) {
      $p = $_SESSION['username_ss'];
      $t = 'Đăng Xuất';
      echo "<li><a href='http://localhost/vqmm/logout.php'> $t </a></li>";
    }

    ?>

  </ul>
  <label id="icon"><i class="fas fa-bars"></i></label>
</nav>