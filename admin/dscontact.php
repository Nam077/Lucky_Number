<?php
session_start();
$_SESSION['menu'] = 4;
include 'include/header.php';

?>
<main class="pt-5 mx-lg-5">
    <div class="container-fluid mt-5">
        <div class="container">
            <div>

            <h5>Thêm Tài Khoản
                </h5>

                <?php
                if (isset($_SESSION['thongbao'])) {
                    $thongbao = $_SESSION['thongbao'];
                    $class = '';
                    if (strlen($thongbao) < 14) $class = 'alert-success';
                    else $class = 'alert-warning';
                    echo "
                <div class='alert $class ' role='alert'>
                                         $thongbao
                                        </div>";
                                        unset($_SESSION['thongbao']);
                } ?>
                

                <h5>Danh Sách Trúng Thưởng</h5>
            </div>
            <div class="table-responsive-md fluid ">

                <table class="table table-bordered bg-primary ">
                    <thead class="thead-dark bg-dark">
                        <tr>
                            <td>STT</td>
                            <td>Email</td>
                            <td>Tên</td>
                            <td>Nội Dung</td>   
                            <td>Liên Hệ</td>
                        </tr>
                    </thead>
                    <?php

                    $db = mysqli_connect("localhost", "root", "", "random");
                    $sql = "SELECT * FROM contact";
                    $result = mysqli_query($db, $sql);
                    if (mysqli_num_rows($result) > 0) {


                        $stt = 0;
                        while ($row = mysqli_fetch_assoc($result)) {

                            echo "<td>$row[id]</td>";
                            echo "<td>$row[email]</td>";
                            echo "<td>$row[name]</td>";
                            echo "<td>$row[text]</td>";
                            echo "<td><a  class = ''  id ='' href= 'dscontact/mail.php?id=$row[id] '><button class ='btn btn-success btn-sm'>Liên Hệ</button></a></td> ";
                            echo "</tr>";
                        }
                    }


                    ?>

                </table>
            </div>
        </div>
    </div>
    </div>
</main>
<?php
include 'include/footer.php';

?>