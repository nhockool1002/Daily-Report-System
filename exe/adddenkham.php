<?php
    session_start();
    ob_start();
    require_once("../config/config.php");
    if(isset($_POST['submit'])){
        $ngaythang = $_POST['ngaythang'];
        $denkham = $_POST['denkham'];

        $sql = "SELECT count(ngaythang) as dem FROM denkham WHERE ngaythang LIKE '$ngaythang'";
        $stmtrs = $conn->prepare($sql);
        $stmtrs->execute();
        $resultz = $stmtrs->get_result();
        $rowtcp = $resultz->fetch_assoc();
        if($rowtcp['dem'] == 0){
            $sqlz = "INSERT INTO `denkham`(`ngaythang`, `soluong`) VALUES ('$ngaythang','$denkham')";
            $conn->query($sqlz);
            $_SESSION['flash'] = "<div class='alert alert-success' style='width:96%;'><b>Đã thêm số lượng đến khám</b></div>";
            header('Location:../index.php?page=adddenkham');
        }
        else{
            $_SESSION['flash'] = "<div class='alert alert-danger' style='width:96%;'><b>Ngày này đã nhập !</b></div>";
            header("Refresh:2; url=../index.php?page=adddenkham");
        }
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