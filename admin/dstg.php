<?php
session_start();
$_SESSION['menu'] = 3;
include 'include/header.php';

?>
<main class="pt-5 mx-lg-5">
    <div class="container-fluid mt-5">
        <div class="container">
            <div>

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
                            <td>Username</td>
                            <td>Số May Mắn</td>
                            <td>Tên</td>
                            <td>Ngày Quay Số</td>
                            <td>Sự Kiện</td>
                            <td>Email</td>
                            <td>Liên hệ</td>
                            
                        </tr>
                    </thead>
                    <?php

                    $db = mysqli_connect("localhost", "root", "", "random");
                    $sql = "SELECT * FROM ds_trung_thuong";
                    $result = mysqli_query($db, $sql);
                    if (mysqli_num_rows($result) > 0) {


                        $stt = 0;
                        while ($row = mysqli_fetch_assoc($result)) {

                            echo "<tr>";
                            echo "<td class = 'bg-dark'>$stt</td>";
                            echo "<td>$row[userName]</td>";
                            echo "<td>$row[SoMayMan]</td>";
                            echo "<td>$row[NgayQuaySo]</td>";
                            echo "<td>$row[Name]</td>";
                            echo "<td>$row[Event]</td>";
                            echo "<td>$row[Email]</td>";
                            echo "<td><a  class = ''  id ='' href= 'dstrungthuong/mail.php?userid=$row[userName]&date=$row[NgayQuaySo]&smm=$row[SoMayMan]' ><button class ='btn btn-success btn-sm'>Liên Hệ</button></a></td> ";
                            echo "</tr>";
                            $stt = $stt + 1;
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