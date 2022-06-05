<?php
    session_start();
    include 'view/header.php';
    include 'view/menu.php';
?>
<?php
    $db = mysqli_connect("localhost", "root", "", "random");
    $sql = "SELECT * FROM ds_sotrungthuong";
    $result = mysqli_query($db, $sql);
    $tmp = 0;
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $tmp = $row['Number'];
            // echo  $row['Number']. "<br>";
        }
    }
    // if ($tmp==0) echo "Chưa tạo số may mắn nào";
    // else
    // echo "Số May Mắn Hiện Tại: " .$tmp. "<br>";
    $sql = "SELECT * FROM ds_quay_so, danhsachtaikhoan WHERE ds_quay_so.userName = danhsachtaikhoan.userName";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            if ($row['SoMayMan'] == $tmp){
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                $t = date('H:i:s - d/m/Y');
                $a = $row['userName'];
                $b = $row['Email'];
                // echo $a. "    -----    " .$b. "<br>";
                $event = $_SESSION['$event'];
                $name = $row['Name'];
                $sql3 = "INSERT INTO dstrungthuong(userName, NgayQuaySo, SoMayMan, Event, Email, Name) VALUES ('$a', '$t' ,'$tmp','$event','$b','$name')";
                mysqli_query($db, $sql3);
            }
        }
    }
?>
<main class="pt-5 mx-lg-5">
    <div class="container-fluid mt-5">
        <div class="container">
        <div style="width: 90%; border-radius: 10px; background-color: #3c0700; margin: 0 auto; margin-top: 6%;padding: 2% 2% 2% 2%">
            <div class="table-responsive-md fluid ">
            <h5 style="color: white">Danh Sách Trúng Thưởng</h5>
                <table class="table table-bordered bg-light ">
                    <thead class="thead-dark bg-dark">
                        <tr>
                            <td>STT</td>
                            <td>Username</td>
                            <td>Họ Tên</td>
                            <td>Số May Mắn</td>
                            <td>Ngày Quay Số</td>
                            <td>Sự Kiện</td>
                            <td>Email</td>
                        </tr>
                    </thead>
                    <?php
                        $db = mysqli_connect("localhost", "root", "", "random");
                        $sql = "SELECT * FROM dstrungthuong";
                        $result = mysqli_query($db, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            $stt = 0;
                        while ($row = mysqli_fetch_assoc($result)) {
                            $emails = $row['Email'];
                            for ($i =0; $i<strlen($emails); $i++)
                            if ($emails[$i]=='@'){
                                $emails[$i-1]='*';
                                $emails[$i-2]='*';
                                $emails[$i-3]='*';
                            }
                            echo "<tr>";
                            echo "<td class ='bg-dark'>$stt</td>";
                            echo "<td>$row[userName]</td>";
                            echo "<td>$row[Name]</td>";
                            echo "<td>$row[SoMayMan]</td>";
                            echo "<td>$row[NgayQuaySo]</td>";
                            echo "<td>$row[Event]</td>";
                            echo "<td> $emails </td>";
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