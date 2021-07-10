<?php
    session_start();
    ob_start();
    require_once("../config/config.php");
    if(isset($_POST['submit'])){
        $onhap = $_POST['onhapnguon'];
        $sql = "INSERT INTO `nguonden`(`nguonden`) VALUES ('$onhap')";
        $conn->query($sql);
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
            <p>LƯU DỮ LIỆU VÀO HỆ THỐNG</p>
            <p style="color:red;font-weight:bolder;">VUI LÒNG CHỜ 2s KIỂM TRA DỮ LIỆU...</p>
        </div>
    </body>
</html>
<?php
    $_SESSION['flash'] = "<div class='alert alert-success' style='margin-top: 10px;width: 100%;margin-left: 0;'><b>Đã thêm nguồn đến vào Cơ sở dữ liệu</b></div>";
    header("Refresh:2; url=../index.php?page=ndlist&child=tnd");
?>