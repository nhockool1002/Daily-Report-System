<?php
    session_start();
    ob_start();
    require_once("../config/config.php");
    if(isset($_POST['submit'])){
        $date = $_POST['ngaythang'];
        $sonhapchuot = $_POST['sonhapchuot'];
        $tongsokhachtuvan = $_POST['tongsokhachtuvan'];
        $khonghieuqua = $_POST['khonghieuqua'];
        $tongchiphi = $_POST['tongchiphi'];
        $hieuqua = $_POST['hieuqua'];
        $dathen = $_POST['dathen'];
        $hienthi = $_POST['hienthi'];
        $giathanh = $_POST['giathanh'];
        $dt=date_create($date);
        $jw = date_format($dt,"Y-m-d");
        $count = "select * from bangnhapfb where ngaythang like '$jw%'";
        $dem = $conn->query($count);

        $sql = "INSERT INTO `bangnhapfb`(`ngaythang`, `tongchiphi`,`hienthi`, `sonhapchuot`, `tongsokhachtuvan`, `hieuqua`, `khonghieuqua`, `dathen`,`giathanh`) VALUES ('$date','$tongchiphi','$hienthi','$sonhapchuot','$tongsokhachtuvan','$hieuqua','$khonghieuqua','$dathen','$giathanh')";
           
    }
?>
<?php
    if($dem->num_rows >0){
            $_SESSION['flash'] = "<div class='alert alert-danger' style='width:96%;'><b>Ngày này đã tồn tại trong hệ thống vui lòng vào danh sách thực hiện sửa</b></div>";
            header('Location:../index.php?page=addform&form=formfb');
            die;
            
    }
    else{
    $conn->query($sql);
    $_SESSION['flash'] = "<div class='alert alert-success' style='width:96%;'><b>Đã thêm số liệu vào Cơ sở dữ liệu</b></div>";
    header("Refresh:2; url=../index.php?page=addform&form=formfb");
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

