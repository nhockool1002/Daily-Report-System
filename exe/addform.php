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
        $uniquevisitors = $_POST['uniquevisitors'];
        $hieuqua = $_POST['hieuqua'];
        $dathen = $_POST['dathen'];
        $denkham = $_POST['denkham'];
        $hienthi = $_POST['hienthi'];
        $dt=date_create($date);
        $jw = date_format($dt,"Y-m-d");
        $count = "select * from bangnhap where ngaythang like '$jw%'";
        $dem = $conn->query($count);
        if($_POST['ghichu'] != ""){
            $ghichu = $_POST['ghichu'];
            if($denkham == ""){
                $sql = "INSERT INTO `bangnhap`(`ngaythang`, `tongchiphi`,`hienthi`, `sonhapchuot`, `uniquevisitor`, `tongsokhachtuvan`, `hieuqua`, `khonghieuqua`, `dathen`,`ghichu`) VALUES ('$date','$tongchiphi','$hienthi','$sonhapchuot','$uniquevisitors','$tongsokhachtuvan','$hieuqua','$khonghieuqua','$dathen','$ghichu')";
            }else{
            $sql = "INSERT INTO `bangnhap`(`ngaythang`, `tongchiphi`,`hienthi`, `sonhapchuot`, `uniquevisitor`, `tongsokhachtuvan`, `hieuqua`, `khonghieuqua`, `dathen`, `denkham`,`ghichu`) VALUES ('$date','$tongchiphi','$hienthi','$sonhapchuot','$uniquevisitors','$tongsokhachtuvan','$hieuqua','$khonghieuqua','$dathen','$denkham','$ghichu')";}
        }
        else{
        if($denkham == ""){
                $sql = "INSERT INTO `bangnhap`(`ngaythang`, `tongchiphi`,`hienthi`, `sonhapchuot`, `uniquevisitor`, `tongsokhachtuvan`, `hieuqua`, `khonghieuqua`, `dathen`) VALUES ('$date','$tongchiphi','$hienthi','$sonhapchuot','$uniquevisitors','$tongsokhachtuvan','$hieuqua','$khonghieuqua','$dathen')";
            }
            else{
            $sql = "INSERT INTO `bangnhap`(`ngaythang`, `tongchiphi`,`hienthi`, `sonhapchuot`, `uniquevisitor`, `tongsokhachtuvan`, `hieuqua`, `khonghieuqua`, `dathen`, `denkham`) VALUES ('$date','$tongchiphi','$hienthi','$sonhapchuot','$uniquevisitors','$tongsokhachtuvan','$hieuqua','$khonghieuqua','$dathen','$denkham')";
            }
        }
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
            <?php //echo $sql; ?>
        </div>
    </body>
</html>
<?php
    if($dem->num_rows >0){
            $_SESSION['flash'] = "<div class='alert alert-danger' style='width:96%;'><b>Ngày này đã tồn tại trong hệ thống vui lòng vào danh sách thực hiện sửa</b></div>";
            header('Location:../index.php?page=addform');
            
    }
    else{
    $conn->query($sql);
    $_SESSION['flash'] = "<div class='alert alert-success' style='width:96%;'><b>Đã thêm số liệu vào Cơ sở dữ liệu</b></div>";
    header("Refresh:2; url=../index.php?page=addform");
    }
?>
