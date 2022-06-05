<?php
session_start();
$_SESSION['menu'] = 1;
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
                <?php
                include 'include/forminsert.php';
                ?>


                <h5>Danh Sách Tài Khoản</h5>
            </div>
            <div class="table-responsive-md fluid ">

                <table class="table table-bordered bg-primary ">
                    <thead class="thead-dark bg-dark">
                        <tr>
                            <td>STT</td>
                            <td>Username</td>
                            <td>Mật Khẩu</td>
                            <td>Tên</td>
                            <td>Email</td>
                            <td>Địa Chỉ</td>
                            <td>Lượt Quay</td>
                            <td>Xóa</td>
                            <td>Sửa</td>
                        </tr>
                    </thead>
                    <?php

                    $db = mysqli_connect("localhost", "root", "", "random");
                    $sql = "SELECT * FROM danhsachtaikhoan";
                    $result = mysqli_query($db, $sql);
                    if (mysqli_num_rows($result) > 0) {


                        $stt = 0;
                        while ($row = mysqli_fetch_assoc($result)) {

                            echo "<tr>";
                            echo "<td class = 'bg-dark'>$stt</td>";
                            echo "<td>$row[userName]</td>";
                            echo "<td>$row[passWord]</td>";
                            echo "<td>$row[Name]</td>";
                            echo "<td>$row[Email]</td>";
                            echo "<td>$row[Address]</td>";
                            echo "<td>$row[Luot_Quay]</td>";
                            echo "<td><a  class = 'delete'  id ='delete' href= 'user/delete.php?userid=$row[userName]' onclick='ConfirmDelete()' ><button class ='btn btn-danger btn-sm'>Xóa</button></a></td> ";
                            echo "<td><a  class = ''  id ='' href= 'user/edit.php?userid=$row[userName]'  ><button class ='btn btn-success btn-sm'>Sửa</button></a></td> ";
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