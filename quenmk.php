<?php
session_start();
?>
<?php
include 'view/headerlogin.php';
include 'view/menu.php';
if (isset($_SESSION['username_ss'])) {
    echo "<script> window.location.href = 'http://localhost/vqmm/index.php'; </script>";
}
include 'view/quenmk.php';
require_once('bdd.php');
if (isset($_POST['guima'])) {
    $email = $_POST['email_qmk'];
    // $password = md5($password);
    $sql = "SELECT * FROM danhsachtaikhoan";
    $result = mysqli_query($db, $sql);
    $kte = 0;
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            if ($email == $row['Email']) {
                $kte = 1;
            }
        }
    }
    if ($kte == 1) {

        $email = $_POST['email_qmk'];
        require_once('bdd.php');
        $sql = "SELECT * FROM danhsachtaikhoan WHERE Email = '$email'";
        $result = mysqli_query($db, $sql);
        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            $userName = $row['userName'];
         
            // echo $row['userName'] ." - ".$row['passWord']."<br>";
          }
        }
        $min = 10000;
        $max = 99999;
        $ma = random_int($min, $max);
        $message = '<h1 style ="background-color="yellow">Mã Xác Nhận Để Thay Đổi Mật Khẩu Của Bạn Là ' . $ma . '</h1>';
        mysqli_query($db, $sql);
        $_SESSION ['ma_dmk'] = $ma;
        $_SESSION ['email_dmk'] = $email;
        $sql = "INSERT INTO xac_nhan( Email, ma, userName) VALUES ('$email','$ma', '$userName')";
        mysqli_query($db, $sql);

        $_SESSION['email_T'] = $email;
        $load = 3;
        $_SESSION['load'] = $load;
        echo "<script> window.location.href = 'http://localhost/vqmm/load.php'; </script>";
    } else {
        echo "<SCRIPT>";
        echo "Swal.fire({
                          icon: 'error',
                          title: 'Lỗi Rồi :(',
                          text: 'Email Này Chưa Đăng Ký Tài Khoản Nào',
                          footer: '<a href = http://localhost/vqmm/login.php>Đăng Ký Tại Đây</a>'
                        })";
        echo "</SCRIPT>";
    }
}
?>

<?php


include 'view/footer.php';

?>
<script src="node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>