<?php
session_start();
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<?php
include 'view/headerluu.php';
include 'view/menu.php';
include 'view/footer.php';
?>

<div class="hh">

    <div style="width: 60%; border-radius: 10px; background-color: #3c0700; margin: 0 auto; margin-top: 6%;padding: 2% 2% 2% 2%">
        <h4 align="center" style="color: white ;font-size: 40px">Liên hệ với chúng tôi</h4>
        <form action="#" method="post">
            <strong style="color:  white;font-size: 30px">Nhập Email</strong>
            <input name="email" required class="form-control" type="email">
            <strong style="color:   white;font-size: 30px">Nhập Tên Của Bạn</strong>
            <input name="ten" required class="form-control" type="text">
            <strong style="color:   white;font-size: 30px">Thông Tin Cần Hỗ Trợ</strong>
            <textarea name="text" required class="form-control" name="" id="" cols="30" rows="6"></textarea>
            <div style="width: 10%;margin: 0 auto;margin-top: 3%">
                <button name="gui_contact" type="submit" style=" padding: 10% 60px 7% 60px;border-radius: 5px">Gửi</button>
            </div>
        </form>

    </div>

</div>
<?php

if (isset($_POST['gui_contact'])) {
    $email = $_POST['email'];
    $ten = $_POST['ten'];
    $text = $_POST['text'];
    require_once('bdd.php');
    $sql = "INSERT INTO contact(name, email, text) VALUES ('$ten','$email','$text')";
    mysqli_query($db, $sql);
}

?>


<?php


?>