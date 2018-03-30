<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
$date = date('Y-m-d');
?>
<div class="container">
    <div class="col-sm-12">
        <div class="row">
        <div class="h1title">Sửa dữ liệu</div>
        </div>
        <br>
        <?php if(isset($_SESSION['flash'])){ ?>
        <div class="row">
            <?php echo $_SESSION['flash']; ?>
        </div>
        <?php 
        unset($_SESSION['flash']);                                   
        } ?>
        <?php
        if(isset($_GET['idbangnhap'])){
            $id = $_GET['idbangnhap'];
        $sql1 = "SELECT * FROM bangnhapfb WHERE id = '$id'";
        $stmt = $conn->prepare($sql1);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        $date=date_create($row['ngaythang']);
        $jw = date_format($date,"Y-m-d");
        ?>
        
                <div class="row">
            <div class="formnhaplieu">
            <form method="post" action="exe/editformfb.php">
            <div class="col-sm-4">
            <label>Ngày :</label><span class="luuy">(Ngày tháng năm vui lòng không được để trống)</span>
            <input type="date" name="ngaythang" class="form-control" value="<?php echo $jw; ?>" disabled="disabled" required>
                <br>
            <label>Hiển thị :</label><span class="luuy" style="padding-right:20px;">(Thông số thể hiện hiển thị)</span>
            <input type="number" name="hienthi" class="form-control" placeholder="Nhập số hiển thị" style="" value="<?php echo $row['hienthi']; ?>" required>
                <br>
            <label>Số nhấp chuột :</label><span class="luuy">(Thông số thể hiện tổng số nhấp chuột)</span>
            <input type="number" name="sonhapchuot" class="form-control" placeholder="Nhập số lần nhấp chuột" value="<?php echo $row['sonhapchuot']; ?>" required>
                <br>
            <label>Tổng số khách tư vấn :</label><span class="luuy">(Thông số thể hiện tổng số khách tư vấn)</span>
            <input type="number" name="tongsokhachtuvan" class="form-control" placeholder="Nhập tổng số khách tư vấn" value="<?php echo $row['tongsokhachtuvan']; ?>" required>
            </div>
            <div class="col-sm-4">
            <label>Tổng chi phí :</label><span class="luuy">(Thông số thể hiển tổng chi phí)</span>
            <input type="text" name="tongchiphi" class="form-control" placeholder="Nhập tổng chi phí" value="<?php echo $row['tongchiphi']; ?>" required>
                <br>
            <label>Hiệu quả :</label><span class="luuy">(Thông số thể hiện số lượng hiệu quả)</span>
            <input type="number" name="hieuqua" class="form-control" placeholder="Nhập số hiệu quả" value="<?php echo $row['hieuqua']; ?>" required>
                <br>
            <label>Không hiệu quả :</label><span class="luuy">(Thông số thể hiện số lượng không hiệu quả)</span>
            <input type="number" name="khonghieuqua" class="form-control" placeholder="Nhập số không hiệu quả" value="<?php echo $row['khonghieuqua']; ?>" required>
            <br>
            <label>Đặt hẹn :</label><span class="luuy">(Thông số thể hiện số lần đặt hẹn)</span>
            <input type="number" name="dathen" class="form-control" placeholder="Nhập số lần đặt hẹn" value="<?php echo $row['dathen']; ?>" required>
            </div>
            <div class="col-sm-4">
            <br>
            <button type="submit" class="btn btn-success btn-lg" style="width:95%;" name="submit">Lưu số liệu</button>
                <br><br>
            <button type="reset" class="btn btn-danger btn-lg" style="width:95%;">Nhập lại</button>
            </div>
            <div class="col-sm-12">
                <p style="font-style:italic;color:red;font-weight:bolder;margin-top:15px;">(*) Vui lòng nhập đủ các trường</p>
            </div>
            <input type="hidden" name="idbangnhap" class="form-control" value="<?php echo $row['id']; ?>" required>
            <input type="hidden" name="ngaythang" class="form-control" value="<?php echo $jw; ?>" required>
            </form>
            </div>
        </div>
    </div>
    <?php } ?>
</div>
