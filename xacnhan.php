        <?php
        session_start();
        ?>
        <?php
        include 'view/headerlogin.php';
        include 'view/menu.php';
        if (isset($_SESSION['username_ss'])) {
            echo "<script> window.location.href = 'http://localhost/vqmm/index.php'; </script>";
        }
        if (isset($_SESSION['username'])) {

            $username = $_SESSION['username'];
            $db = mysqli_connect("localhost", "root", "", "random");
            $sql = "SELECT * FROM xac_nhan WHERE userName = '$username'";
            $result = mysqli_query($db, $sql);
            $username = '';
            $pass = '';
            $name = '';
            $email = '';
            $add = '';
            $ma = '';
            $lq = 0;
            $ma_xn = $_POST['ma'];
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $username = $row['userName'];
                    $pass = $row['passWord'];
                    $name = $row['Name'];
                    $email = $row['Email'];
                    $add = $row['Address'];
                    $ma = $row['ma'];
                }
            }
            $message = '<h1>Mã Xác Nhận Của Bạn Là ' . $ma . '</h1>';
            include 'view/mail.php';
            if (isset($_POST['xacnhanma'])) {
                if ($ma_xn == $ma) {
                    $sqt = "INSERT INTO danhsachtaikhoan(userName, passWord, Name, Address, Email, Luot_Quay) VALUES ('$username', '$pass' ,'$name','$add','$email','$lq')";
                    mysqli_query($db, $sqt);
                    $message = 'Đăng Ký Thành Công';
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
                        window.location.href = 'http://localhost/vqmm/login.php' ;
                    }, 2000); </script>";
                    $sqk = "delete from xac_nhan where userName = '$username'";
                    mysqli_query($db, $sqk);
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
        }

        include 'view/formxacnhan.php';

        include 'view/footer.php';

        ?>
      
        <script src="node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>