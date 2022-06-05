<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="../css/mdb.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="../css/style.min.css" rel="stylesheet">
    <script type="text/javascript">
        var baseUrl = 'http://example.com';

        function ConfirmDelete() {
            var x = confirm("Bạn Có Muốn Xóa Không?");
            if (x)
                return false;

        }
    </script>
    <style>
        td {
            text-align: center;
            color: aliceblue;
            font-size: 20px;
        }

        * {
            font-family: 'Roboto Condensed', sans-serif;
            font-size: 17.5px;
        }

        .map-container {
            overflow: hidden;
            padding-bottom: 56.25%;
            position: relative;
            height: 0;
        }

        .map-container iframe {
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            position: absolute;
        }
    </style>
</head>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>



    <?php
    session_start();
    $_SESSION['menu'] = 1;
    include '../include/header.php';

    ?>
    ?
    <?php

    $username = "";
    $date = "";
    $name = "";
    $email = "";
    $event = "";
    $smm = "";
    $c = $_GET['userid'];
    $k = $_GET['date'];
    $db = mysqli_connect("localhost", "root", "", "random");
    $sql = "SELECT * FROM ds_trung_thuong where userName ='$c'";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $username = $row['userName'];
            $date = $row['NgayQuaySo'];
            $name = $row['Name'];
            $email = $row['Email'];
            $event = $row['Event'];
            $smm = $row['SoMayMan'];
        }
    }
    $message = '
                <h3 align="center">Chúc Mừng Bạn Đã May Mắn Trúng Giải Của Chương Trình Quay Số May Mắn</h3>
                <table style= " text-align: center;"  width="100%" cellpadding="5" cellspacing="5">
                <tr>
                  <td style="background-color: #4CAF50;
                  color: white;padding: 20px;" width="30%">Họ Và Tên</td>
                  <td style="background-color: #f5f5f5;text-algin:center;font-size:40px;" width="80%">                  ' . $name . '</td>
                </tr>
                <tr>
                  <td style="background-color: #4CAF50;
                  color: white;padding: 20px;" width="30%">Email </td>
                  <td style="background-color: #f5f5f5; text-align: center;font-size:40px;" width="80%">                  ' . $email . '</td>
                </tr>
                <tr>
                <td style="background-color: #4CAF50;
                color: white;padding: 20px;" width="30%">Số May Mắn</td>
                <td style="background-color: #f5f5f5;text-algin:center;font-size:40px;" width="80%">                  ' . $smm . '</td>
              </tr>
                <tr>
                  <td style="background-color: #4CAF50;
                  color: white;padding: 20px;" width="30%">Ngày Quay Số</td>
                  <td style="background-color: #f5f5f5;text-algin:center;font-size:40px;"width="80%">                  ' . $date . '</td>
                </tr>
                <tr>
                  <td style="background-color: #4CAF50;
                  color: white;padding: 20px;" width="30%">Sự Kiện</td>
                  <td style="background-color: #f5f5f5;text-algin:center;font-size:40px;" width="80%">                  ' . $event . '</td>
                </tr>
                
                </table>
                <h3 align="center">Bạn Vui Lòng Trả lời Mail này để xác nhận thông tin theo mẫu sau </h3> <br>
                <h3 align="center">Địa Chỉ </h3> 
                <h3 align="center">Số Điện Thoại</h3> 
                <h3 align="center">Cảm Ơn Bạn</h3> 
              ';
    $o = "Xin chúc mừng bạn đã may mắn trúng giải của chưởng trình QUAYSOMAYMAN.COM  
    Thông tin chi tiết về giải thưởng 
    Họ Và Tên : $name
    Số May Mắn: $smm  
    Ngày Quay Số: $date
    Sự Kiện: $event ";

    ?>

    <main class="pt-5 mx-lg-5">
        <div class="container-fluid mt-5">
            <div style=" margin-top: -5%" class="container col-md-9">
                <!-- <h4>Liên hệ Tài Khoản Trúng Giải <strong style="color: red; font-size: 45px;"> <?php echo $username ?></strong></h4> -->
                <?php
                include('../include/mail.php');
                ?>
            </div>
        </div>
    </main>
    <?php

    if (isset($_POST['submit_mail'])) {
        $email = $email;

        include "../include/sendmail.php";
    }

    ?>

    <?php
    include '../include/footer.php';
    unset($_SESSION['menu']);
    ?>
</body>

</html>