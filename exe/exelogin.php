<?php
    session_start();
    ob_start();
    require_once("../config/config.php");
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $captcha = $_POST['captcha'];
        $check  = $_POST['check'];
        if($captcha != $check){
            $_SESSION['flash'] = "<div class='err'>Captcha không đúng vui lòng nhập lại</div>";
            header('Location:../login.php');
            die;
        }
        ?>
        <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Xử lý :: Lưu dữ liệu vào hệ thống - Daily Reporting System :: Bảng quản trị</title>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <div class="content" style="width:100%;text-align:center;margin-top: 10%;">
            <img src="https://loading.io/spinners/pies/lg.pie-chart-loading-gif.gif" style="margin:0 auto;display:block;text-align:center;">
            <p>KIỂM TRA DỮ LIỆU HỆ THỐNG</p>
            <p style="color:red;font-weight:bolder;">VUI LÒNG CHỜ 2s KIỂM TRA DỮ LIỆU...</p>
        </div>
    </body>
</html>
        <?php
        $sql = "SELECT * FROM nguoidung WHERE username='$username' AND password='$password'";
        $rs = $conn->query($sql);
        if($rs->num_rows > 0){
            $_SESSION['kanguser'] = $username;
            header("Refresh:2; url=../index.php");
        }
        else{
            $_SESSION['flash'] = "<div class='err'>Username hoặc Password không đúng vui lòng kiểm tra lại</div>";
            header("Refresh:2; url=../login.php");
        }
    }
?>