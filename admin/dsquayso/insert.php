<?php   
             session_start();
            $db = mysqli_connect("localhost", "root", "", "random");
                $username = $_POST['username'];
                $smm   = $_POST['smm'];
                $date = $_POST['date'];
                $event = $_POST['event'];
                $email= $_POST['email'];
                $sql = "INSERT INTO ds_quay_so(userName, SoMayMan, NgayQuaySo, event, Email) VALUES('$username', '$smm' ,'$date','$event','$email')";
                mysqli_query($db, $sql);
                $thongbao ='Thanh Cong';
                $_SESSION['thongbao'] =  $thongbao;
                echo"<script> window.location.href = 'http://localhost/vqmm/admin'; </script>";
               