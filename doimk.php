        <?php
        session_start();
        if (isset($_SESSION['email_dmk'])) { } else echo "<script> window.location.href = 'http://localhost/vqmm/index.php'; </script>";

        ?>
        <?php
         unset($_SESSION['mailfile']);
        include 'view/headerlogin.php';
        include 'view/menu.php';
        $email = $_SESSION['email_dmk'];
        $ma = $_SESSION['ma_dmk'];
        $userName = '';
        $namea = '';
        $message = '<h1 style ="background-color="yellow">Mã Xác Nhận Để Thay Đổi Mật Khẩu Của Bạn Là ' . $ma . '</h1>';
        include 'view/mail.php';
        include 'view/doimk.php';
        $db = mysqli_connect("localhost", "root", "", "random");
        $sql = "SELECT * FROM xac_nhan WHERE Email = '$email'";
        $result = mysqli_query($db, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $ma = $row['ma'];
                $userName = $row['userName'];
            }
        }
        if (isset($_POST['xacnhanma'])) {
            $kt = 0;
            $ma_xn = $_POST['ma'];
            $mk1 = $_POST['mkmoi1'];
            $mk2 = $_POST['mkmoi2'];
            if ($ma_xn == $ma) {
                $kt = 1;
                if ($kt == 1) {
                    $kt1 = 0;
                    if ($mk1 == $mk2) {
                        $kt1 = 1;
                        if ($kt1 == 1) {
                            $db = mysqli_connect("localhost", "root", "", "random");
                            $sql = " UPDATE danhsachtaikhoan SET passWord = '$mk2' WHERE userName = '$userName'";
                            mysqli_query($db, $sql);
                            $sqk = "delete from xac_nhan where userName = '$userName'";
                            mysqli_query($db, $sqk);
                            echo "<SCRIPT>";
                            echo "Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Mật Khẩu Của Bạn Đã Được Thay Thành Công',
                                showConfirmButton: false,
                                timer: 3000
                            })";
                            echo "</SCRIPT>";
                            echo "<script>
                            setTimeout(function(){
                                window.location.href = 'http://localhost/vqmm/index.php' ;
                            }, 2000); </script>";
                        }
                        unset($_SESSION['email_dmk']);
                        unset($_SESSION['ma_dmk']);
                    } else {
                        echo "<SCRIPT>";
                        echo "Swal.fire({
                      icon: 'error',
                      title: 'Mật Khẩu Không Khớp',
                      footer: '<a href = http://localhost/vqmm/login.php>Đăng Nhập Tại Đây</a>'
                    })";
                        echo "</SCRIPT>";
                    }
                }
            } else {
                echo "<SCRIPT>";
                echo "Swal.fire({
              icon: 'error',
              title: 'Lỗi Rồi :(',
              text: 'Sai Mã',
              footer: '<a href = http://localhost/vqmm/login.php>Đăng Nhập Tại Đây</a>'
            })";
                echo "</SCRIPT>";
            }
        }
        ?>
          <?php

            ?>