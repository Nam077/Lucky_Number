<?php
    session_start();
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <script src="jquery-2.1.4.js"></script>
        <link rel="stylesheet" type="text/css" href="styles.css" />
        <title>Đang Tải Vui Lòng Chờ</title>

    </head>
    <style>
        body {
            margin: 0;
            padding: 0;
            width: 100vw;
            height: 100vh;
            background-color: #eee;
        }
        
        .content {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
        }
        
        .loader-wrapper {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            background-color: #000000;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .loader {
            display: inline-block;
            width: 30px;
            height: 30px;
            position: relative;
            border: 4px solid #Fff;
            animation: loader 2s infinite ease;
        }
        
        .loader-inner {
            vertical-align: top;
            display: inline-block;
            width: 100%;
            background-color: #fff;
            animation: loader-inner 2s infinite ease-in;
        }
        
        @keyframes loader {
            0% {
                transform: rotate(0deg);
            }
            25% {
                transform: rotate(180deg);
            }
            50% {
                transform: rotate(180deg);
            }
            75% {
                transform: rotate(360deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }
        
        @keyframes loader-inner {
            0% {
                height: 0%;
            }
            25% {
                height: 0%;
            }
            50% {
                height: 100%;
            }
            75% {
                height: 100%;
            }
            100% {
                height: 0%;
            }
        }
    </style>

    <body>
        <div class="content">
            <img src="https://picsum.photos/300/300/?random" />
        </div>

        <div class="loader-wrapper">
            <span class="loader"><span class="loader-inner"></span></span>
        </div>
        <div>
        </div>


        <script>
            $(window).on("load", function() {
                $(".loader-wrapper").fadeOut("slow");
            });
        </script>
    </body>

    </html>
    <?php
if (isset($_SESSION['load'])) {
    $k = $_SESSION['load'];
    if ($k == 1) {
        echo "<script>
            setTimeout(function(){
            window.location.href = 'http://localhost/vqmm/luu.php' ;
            }, 000); </script>";
    } else if ($k == 2) {
        echo "<script>
            setTimeout(function(){
            window.location.href = 'http://localhost/vqmm/xacnhan.php' ;
            }, 000); </script>";
    }
    else if ($k == 3) {
        echo "<script>
            setTimeout(function(){
            window.location.href = 'http://localhost/vqmm/doimk.php' ;
            }, 000); </script>";
    }
} else
    echo "<script> window.location.href = 'http://localhost/vqmm/index.php'; </script>";
?>