<?php
session_start();
$_SESSION['menu'] = 5;
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
                  
                } ?>
                

                <h5>Danh Sách Số Trúng Thưởng</h5>
            </div>
            <div class="table-responsive-md fluid ">

                <table class="table table-bordered bg-primary ">
                    <thead class="thead-dark bg-dark">
                        <tr>
                            <td>STT</td>                           
                            <td>Số May Mắn</td>
                            <td>Ngày Quay Số</td>   
                        </tr>
                    </thead>
                    <?php

                    $db = mysqli_connect("localhost", "root", "", "random");
                    $sql = "SELECT * FROM ds_sotrungthuong";
                    $result = mysqli_query($db, $sql);
                    if (mysqli_num_rows($result) > 0) {


                        $stt = 0;
                        while ($row = mysqli_fetch_assoc($result)) {

                            echo "<tr>";
                            echo "<td class = 'bg-dark'>$stt</td>";
                            echo "<td>$row[Number]</td>";
                            echo "<td>$row[Datetime]</td>";
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