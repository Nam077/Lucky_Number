            <?php
            session_start();
            ?>
            <?php

            include 'view/headerlogin.php';
            include 'view/menu.php';
            if (isset($_SESSION['username_ss'])) {
                echo "<script> window.location.href = 'http://localhost/vqmm/index.php'; </script>";
            }
            include 'view/formlogin.php';
            ?>
            <?php
            if (isset($_POST['login-submit'])) {
                require_once('bdd.php');
                $username = $_POST['username'];
                $password = $_POST['password'];
                // $password = md5($password);
                $sql = "SELECT * FROM danhsachtaikhoan";
                $result = mysqli_query($db, $sql);
                $kt = 0;

                // echo $username ." - ".$password."<br>";
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        if ($username == $row['userName'] && $password == $row['passWord']) {
                            $kt = 1;
                            $ten = $row['Name'];
                        }
                    }
                }
                if ($kt == 1) {
                    $tang = 0;
                    $t = date('Y:m:d');
                    $db = mysqli_connect("localhost", "root", "", "random");
                    $sql = "SELECT * FROM tangluotquay";
                    $result = mysqli_query($db, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            if ($username == $row['userName']) {
                                $h = $row['DangNhapCuoi'];
                                if ($t > $h) {
                                    $tang = 1;
                                }
                            }
                        }
                    }
                    if ($tang == 1) {
                        echo "</SCRIPT>";
                        // echo $t;
                        $t = date('Y:m:d');
                        $db = mysqli_connect("localhost", "root", "", "random");
                        $sql = "UPDATE tangluotquay SET DangNhapCuoi = '$t' WHERE userName = '$username'";
                        mysqli_query($db, $sql);
                        $sql = "UPDATE danhsachtaikhoan SET Luot_Quay =Luot_Quay + $tang WHERE userName = '$username'";
                        mysqli_query($db, $sql);
                    }
                    $_SESSION['username_ss'] = $username;
                    $message = 'Xin Chào ' . $username;
                    echo "<SCRIPT>";
                    echo "Swal.fire({
                      position: 'center',
                      icon: 'success',
                      title: '$message',
                      showConfirmButton: true,
                      timer: 3000
                    })";
                    echo "</SCRIPT>";
                    echo "<script>
                    setTimeout(function(){
                        window.location.href = 'http://localhost/vqmm/index.php' ;
                    }, 2000); </script>";
                } else {
                    echo "<SCRIPT>";
                    echo "Swal.fire({
                      icon: 'error',
                      title: 'Lỗi Rồi :(',
                      text: 'Sai Thông Tin Hoặc Tài Khoản',
                      footer: '<a href = http://localhost/vqmm/login.php>Đăng Nhập Tại Đây</a>'
                    })";
                    echo "</SCRIPT>";
                }
            }

            ?>

            <?php
            require_once('bdd.php');
            if (isset($_POST['register-submit'])) {
                $username = $_POST['username_dk'];
                $password = $_POST['pass_dk'];
                $name    = $_POST['ten_dk'];
                $password2 = $_POST['pass2_dk'];
                $email = $_POST['email_dk'];
                $address = $_POST['address_dk'];
                if ($password == $password2) {
                    // $password = md5($password);
                    $sql = "SELECT * FROM danhsachtaikhoan";
                    $result = mysqli_query($db, $sql);
                    $kt = 1;
                    $kte = 1;

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            if ($email == $row['Email']) {
                                $kte = 0;
                            }
                            if ($username == $row['userName']) {
                                $kt = 0;
                            }
                        }
                    }
                    if ($kt == 1) {
                        if ($kte == 1) {
                            $email = $_POST['email_dk'];
                            $d = $email;
                            $min = 10000;
                            $max = 99999;
                            $ma = random_int($min, $max);
                            $sql = "INSERT INTO xac_nhan(userName, passWord, Name, Address, Email, ma) VALUES ('$username', '$password' ,'$name','$address','$email','$ma')";
                            mysqli_query($db, $sql);
                            $sql = "INSERT INTO tangluotquay(userName, DangNhapCuoi) VALUES ('$username', '0000:00:00')";
                            mysqli_query($db, $sql);
                            $_SESSION['username'] = $username;
                            $xacnhan_a = 'xacnhandk';
                            $load = '2';
                            $_SESSION['load'] = $load;
                            echo "<script> window.location.href = 'http://localhost/vqmm/load.php'; </script>";
                            $_SESSION['xacnhan'] = $xacnhan_a;
                        } else {
                            echo "<SCRIPT>";
                            echo "Swal.fire({
                            icon: 'error',
                            title: 'Lỗi Rồi :(',
                            text: 'Mỗi Email Chỉ Đăng Ký Một Tài Khoản',
                        })";
                            echo "</SCRIPT>";
                        }
                    } else {
                        echo "<SCRIPT>";
                        echo "Swal.fire({
                          icon: 'error',
                          title: 'Lỗi Rồi :(',
                          text: 'Tên Đăng Nhập Tồn Tại',
                          
                        })";
                        echo "</SCRIPT>";
                    }
                } else echo "that bai";
            }
            ?>
