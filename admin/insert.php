<?php   
             session_start();
            $db = mysqli_connect("localhost", "root", "", "random");
                $username = $_POST['username'];
                $password = $_POST['password'];
                $name    = $_POST['hoten'];
                $email = $_POST['email'];
                $address = $_POST['diachi'];
                $luot = $_POST['luot'];
                if ($password == $password) {
                    // $password = md5($password);
                    $sql = "SELECT userName FROM danhsachtaikhoan";
                    $result = mysqli_query($db, $sql);
                    $kt = 1;
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            if ($username == $row['userName']) $kt = 0;
                        }
                    }
                    if ($kt == 1) {
                        $sql = "INSERT INTO danhsachtaikhoan(userName, passWord, Name, Address, Email, Luot_Quay) VALUES ('$username', '$password' ,'$name','$address','$email','$luot')";
                        mysqli_query($db, $sql);
                        $thongbao = 'Thành Công';
                        $_SESSION['thongbao'] =  $thongbao;
                    } else {
                        $thongbao ='Tên Đăng Nhập Đã Tồn Tại';
                       $_SESSION['thongbao'] =  $thongbao;
                    }
                } else echo "that bai";
                echo"<script> window.location.href = 'http://localhost/j'; </script>";
            ?>