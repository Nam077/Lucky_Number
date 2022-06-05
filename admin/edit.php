<?php
session_start();
include 'include/header.php';
?>
?<?php
    $c = $_GET['userid'];
    echo $id;
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
                include('include/formedit.php');
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
    $thongbao = 'Sửa Thông Tin Thành Công';
    $_SESSION['thongbao'] = $thongbao;
    echo"<script> window.location.href = 'http://localhost/j'; </script>";
}

?>

<?php
include 'include/footer.php'
?>