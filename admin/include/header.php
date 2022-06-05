<?php
if (isset($_SESSION['username_admin'])) { } else echo "<script> window.location.href = 'http://localhost/vqmm/admin/login'; </script>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Quản Trị Viên</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.min.css" rel="stylesheet">
    <script type="text/javascript">
        < link href = 'css/fullcalendar.css'
        rel = 'stylesheet' / >
            var baseUrl = 'http://example.com';

        function ConfirmDelete() {
            var x = confirm("Bạn Có Muốn Xóa Không?");
            if (x)
                return false;

        }
    </script>
    <style>
        td {
            text-align: center;
            <?php if ($_SESSION['menu'] != 6) echo "
            color: aliceblue;
            font-size: 20px;"
            ?>
        }

        * {
            font-family: 'Roboto Condensed', sans-serif;
            font-size: 17.5px;
        }

        .map-container {
            overflow: hidden;
            padding-bottom: 56.25%;
            position: relative;
            height: 0;
        }

        .map-container iframe {
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            position: absolute;
        }
    </style>
</head>

<body class="grey lighten-3">

    <!--Main Navigation-->
    <header>

        <!-- Navbar -->

        <!-- Sidebar -->
        <div class="sidebar-fixed position-fixed">

           

            <div class="list-group list-group-flush">
                <a href="#" class="list-group-item  waves-effect">
                    <i class="fas  mr-3"></i>QUAYSOMAYMAN.COM
                </a>
                <a href="http://localhost/vqmm/admin/" class="list-group-item <?php
                                                                                $a =   $_SESSION['menu'];
                                                                                if ($a == 1) {
                                                                                    echo 'active';
                                                                                } else
                                                                                    echo ' ';

                                                                                ?>  list-group-item-action waves-effect">
                    <i class="fas fa-user mr-3"></i>Người Dùng</a>
                <a href="http://localhost/vqmm/admin/dsquayso.php" class="list-group-item  list-group-item-action m <?php
                                                                                                                    $a =   $_SESSION['menu'];
                                                                                                                    if ($a == 2) {
                                                                                                                        echo 'active';
                                                                                                                    }
                                                                                                                    ?> waves-effect">
                    <i class="fas fa-table mr-3"></i>DS Quay Số</a>
                <a href="http://localhost/vqmm/admin/dstg.php" class="list-group-item  list-group-item-action m <?php
                                                                                                                $a =   $_SESSION['menu'];
                                                                                                                if ($a == 3) {
                                                                                                                    echo 'active';
                                                                                                                }
                                                                                                                ?> waves-effect">
                    <i class="fas fa-table mr-3"></i>DS Trúng Giải</a>
                <a href="http://localhost/vqmm/admin/dscontact.php" class="list-group-item  list-group-item-action m <?php
                                                                                                                        $a =   $_SESSION['menu'];
                                                                                                                        if ($a == 4) {
                                                                                                                            echo 'active';
                                                                                                                        }
                                                                                                                        ?> waves-effect">
                    <i class="fas fa-table mr-3"></i>DS Contact</a>
                <a href="http://localhost/vqmm/admin/calendar.php" class="list-group-item  list-group-item-action m <?php
                                                                                                                        $a =   $_SESSION['menu'];
                                                                                                                        if ($a == 6) {
                                                                                                                            echo 'active';
                                                                                                                        }
                                                                                                                        ?> waves-effect">
                    <i class="fas fa-table mr-3"></i>Sự Kiện</a>
                    <a href="http://localhost/vqmm/admin/strg.php" class="list-group-item  list-group-item-action m <?php
                                                                                                                        $a =   $_SESSION['menu'];
                                                                                                                        if ($a == 5) {
                                                                                                                            echo 'active';
                                                                                                                        }
                                                                                                                        ?> waves-effect">
                    <i class="fas fa-table mr-3"></i>DS Số Trúng Giải</a>
               
                <a href="http://localhost/vqmm/admin/logout.php" class="list-group-item list-group-item-action waves-effect">
                    <i class="fas fa-money-bill-alt mr-3"></i>Đăng Xuất</a>
            </div>

        </div>
        <!-- Sidebar -->

    </header>