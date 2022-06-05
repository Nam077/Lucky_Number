<?php
session_start();
include 'view/header.php';
include 'view/menu.php';
if (isset($_SESSION['username_ss'])) {
    $c = $_SESSION['username_ss']; 
}
else  echo "<script> window.location.href = 'http://localhost/vqmm/index.php'; </script>";
?>

<main class="pt-5 mx-lg-5">
    
    <div class="container-fluid mt-5">
        <div class="container">
            <div style="width: 90%; border-radius: 10px; background-color: #3c0700; margin: 0 auto; margin-top: 6%;padding: 2% 2% 2% 2%">
                <div class="table-responsive-md fluid ">
                <h5 style="color: white">Lịch Sử Quay Số Của Bạn</h5>
                    <table class="table table-bordered bg-light ">
                        <thead class="thead-dark bg-light">
                            <tr>
                                <td>STT</td>
                                <td>Số May Mắn</td>
                                <td>Ngày Quay Số</td>
                                <td>Sự Kiện</td>
                                <td>Email</td>
                            </tr>
                        </thead>
                        <?php

                        $db = mysqli_connect("localhost", "root", "", "random");
                        $sql = "SELECT * FROM ds_quay_so  WHERE userName = '$c'";
                        $result = mysqli_query($db, $sql);
                        if (mysqli_num_rows($result) > 0) {


                            $stt = 0;
                            while ($row = mysqli_fetch_assoc($result)) {

                                echo "<tr>";
                                echo "<td class = 'bg-light'>$stt</td>";
                                echo "<td>$row[SoMayMan]</td>";
                                echo "<td>$row[NgayQuaySo]</td>";
                                echo "<td>$row[event]</td>";
                                echo "<td>$row[Email]</td>";
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