<?php
    session_start();
    ob_start();
    require_once("../config/config.php");
    if(isset($_POST['submit'])){
        $date = $_POST['ngaythang'];
        $tongsokhachtuvan = $_POST['tongsokhachtuvan'];
        $khonghieuqua = $_POST['khonghieuqua'];
        $hieuqua = $_POST['hieuqua'];
        $dathen = $_POST['dathen'];
        $adwords = $_POST['adwords'];
        $facebook = $_POST['facebook'];
        $seo = $_POST['seo'];
        $dt=date_create($date);
        $jw = date_format($dt,"Y-m-d");
        $count = "select * from bangnhapdt where ngaythang like '$jw%'";
        $dem = $conn->query($count);

        $sql = "INSERT INTO `bangnhapdt`(`ngaythang`, `tongsokhachtuvan`, `hieuqua`, `khonghieuqua`, `dathen`,`adwords`,`facebook`,`seo`) VALUES ('$date','$tongsokhachtuvan','$hieuqua','$khonghieuqua','$dathen','$adwords','$facebook','$seo')";
           
    }
?>
<?php
    if($dem->num_rows >0){
            $_SESSION['flash'] = "<div class='alert alert-danger' style='width:96%;'><b>Ngày này đã tồn tại trong hệ thống vui lòng vào danh sách thực hiện sửa</b></div>";
            header('Location:../index.php?page=addform&form=formdt');
            die;
            
    }
    else{
    $conn->query($sql);
    $_SESSION['flash'] = "<div class='alert alert-success' style='width:96%;'><b>Đã thêm số liệu vào Cơ sở dữ liệu</b></div>";
    header("Refresh:2; url=../index.php?page=addform&form=formdt");
    }
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Xử lý :: Lưu dữ liệu vào hệ thống - Hệ thống báo biểu :: Bảng quản trị</title>
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

