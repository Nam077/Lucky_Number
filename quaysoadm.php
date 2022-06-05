<?php
session_start();
include 'view/header.php';
include 'view/menu.php';
date_default_timezone_set('Asia/Ho_Chi_Minh');

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
 if (isset($_SESSION['username_ss'])) {
    $c = $_SESSION['username_ss'];
    if($c == 'admin'){
        if (isset($_POST['submit'])) {
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $b = $_COOKIE['text'];
            $db = mysqli_connect("localhost", "root", "", "random");
            $a = date('H:i:s - d/m/Y');
            $sql = "INSERT INTO ds_sotrungthuong(Number, Datetime) VALUES ('$b', '$a')";
            mysqli_query($db, $sql);
        }
    }
    else {
        echo "<script> window.location.href = 'http://localhost/vqmm/'; </script>";
    }
 }
 else echo "<script> window.location.href = 'http://localhost/vqmm/'; </script>";


?>
<?php
    include 'view/footer.php';
?>