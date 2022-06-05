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
    $c = $_GET['userid'];
    $db = mysqli_connect("localhost", "root", "", "random");
    $sql = "SELECT * FROM danhsachtaikhoan WHERE userName = '$c'";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $username = $row['userName'];
            $pass = $row['passWord'];
            $name = $row['Name'];
            $email = $row['Email'];
            $add = $row['Address'];
            $luot = $row['Luot_Quay'];
        }
    }
    ?>

            <main class="pt-5 mx-lg-5">
                <div class="container-fluid mt-5">
                    <div style=" margin-top: -5%" class="container col-md-9">
                        <h4>Sửa Tài Khoản <strong style="color: red; font-size: 45px;"> <?php echo $username ?></strong></h4>
                        <?php
            include('../include/formedit.php');
            ?>
                    </div>
                </div>
            </main>
            <?php
if (isset($_POST['submit_edit'])) {
    $pass = $_POST['password'];
    $name = $_POST['hoten'];
    $email = $_POST['email'];
    $add = $_POST['diachi'];
    $luot = $_POST['luot'];
    $db = mysqli_connect("localhost", "root", "", "random");
    $sqm = "UPDATE danhsachtaikhoan SET Name = '$name', Address = '$add', Email = '$email',   passWord = '$pass',  Luot_Quay = '$luot' WHERE userName = '$c'";
    mysqli_query($db, $sqm);
    $thongbao = 'Thành Công';
    $_SESSION['thongbao'] = $thongbao;
    echo "<script> window.location.href = 'http://localhost/vqmm/admin/'; </script>";
}

?>

                <?php
include '../include/footer.php';

?>
</body>

</html>
