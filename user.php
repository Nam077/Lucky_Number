    <?php
    session_start();
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    ?>
    <?php
    include 'view/headerluu.php';
    include 'view/menu.php';
    include 'view/footer.php';
    ?>
     if (isset($_SESSION['username_ss'])) {
    <?php
    $j = "";
    $c = "";
    $d = "";
    $k = "";
    $k = "";
    $c = $_SESSION['username_ss'];
    require_once('bdd.php');
    $sql = "SELECT * FROM danhsachtaikhoan WHERE userName = '$c'";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $j = $row['userName'];
            $c = $row['Name'];
            $d = $row['Email'];
            $k = $row['Address'];
            $o = $row['Luot_Quay'];

            // echo $row['userName'] ." - ".$row['passWord']."<br>";
        }
    }
     
 else echo "<script> window.location.href = 'http://localhost/vqmm/'; </script>";


    ?>
    </div>
    <div class="hh">
        <div id="form_wrapper" style="width: 60%;">
            <div id="form_left">
                <div>
                    
                    <img style="width: 80%; margin-top: -10%;" style="width: 15%; height: 40%;" src="images/user.png.png" alt="">
                </div>
            </div>
            <div id="form_right" style=" margin-top: -10%;;margin-left: -20% ;padding-right:7%; ">
                <h1 style="color: darkred;">Thông Tin Tài Khoản</h1>
                <div style="font-size: 10px;">
                    <span style="font-size: 30px;">Tên Tài Khoản: <?php echo  $j; ?></span><br><br>
                    <span style="font-size: 30px;">Họ Và Tên: <?php echo  $c; ?></span><br><br>
                    <span style="font-size: 30px;">Email: <?php echo $d; ?></span><br><br><br>
                    <span style="font-size: 30px;">Địa Chỉ: <?php echo $k; ?></span><br><br>
                    <span style="font-size: 30px;">Lượt Quay: <?php echo $o; ?></span><br><br>
                    <form action="" method="post">
                    <div style="width: 60%;margin: 0 auto" class="col-sm-6 offset-sm-3">
                                  <input style="border-radius: 10px; background-color: #3c0700;float:left;  margin-top: 6%;padding:5% 10% 5% 10%; color:wheat;" type="submit" name="xacnhanma" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Đổi Mật Khẩu">
                                </div>
                    <div style="width: 60%;margin: 0 auto" class="col-sm-6 offset-sm-3">
                        <input style="border-radius: 10px; background-color: #3c0700;  margin-top: 6%;padding:5% 10% 5% 10%;float: right; color:wheat;" type="submit" name="lichsu" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Xem Lịch Sử">
                    </div>
                    </form>
                </div>
            </div>
        </div>
   <?php
    if (isset($_POST['xacnhanma'])) {
        $min = 10000;
        $max = 99999;
        $ma = random_int($min, $max);
        $message = '<h1 style ="background-color="yellow">Mã Xác Nhận Để Thay Đổi Mật Khẩu Của Bạn Là ' . $ma . '</h1>';
        mysqli_query($db, $sql);
        $_SESSION ['ma_dmk'] = $ma;
        $_SESSION ['email_dmk'] = $d;
        $email = $d;
        $sql = "INSERT INTO xac_nhan( Email, ma, userName) VALUES ('$email','$ma', '$j')";
        mysqli_query($db, $sql);

        $_SESSION['email_T'] = $d;
        $load = 3;
        $_SESSION['load'] = $load;
        echo "<script> window.location.href = 'http://localhost/vqmm/load.php'; </script>";
    }
   ?>
   <?php
    if (isset($_POST['lichsu'])) {
       
        echo "<script> window.location.href = 'http://localhost/vqmm/lichsuquayso.php'; </script>";
    }
   ?>
