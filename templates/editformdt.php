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
        $sql1 = "SELECT * FROM bangnhapdt WHERE id = '$id'";
        $stmt = $conn->prepare($sql1);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        $date=date_create($row['ngaythang']);
        $jw = date_format($date,"Y-m-d");
        ?>
        
                <div class="row">
            <div class="formnhaplieu">
            <form method="post" action="exe/editformdt.php">
            <div class="col-sm-4">
            <label>Ngày :</label><span class="luuy">(Ngày tháng năm vui lòng không được để trống)</span>
            <input type="date" name="ngaythang" class="form-control" value="<?php echo $jw; ?>" disabled="disabled" required>
                <br>
            <label>Tổng số khách tư vấn :</label><span class="luuy">(Thông số thể hiện tổng số khách tư vấn)</span>
            <input type="number" name="tongsokhachtuvan" class="form-control" value="<?php echo $row['tongsokhachtuvan']; ?>" placeholder="Nhập tổng số khách tư vấn" required>
            <br>
            <label>Hiệu quả :</label><span class="luuy">(Thông số thể hiện số lượng hiệu quả)</span>
            <input type="number" name="hieuqua" class="form-control" value="<?php echo $row['hieuqua']; ?>" placeholder="Nhập số hiệu quả" required>
                <br>
            <label>Không hiệu quả :</label><span class="luuy">(Thông số thể hiện số lượng không hiệu quả)</span>
            <input type="number" name="khonghieuqua" class="form-control" value="<?php echo $row['khonghieuqua']; ?>" placeholder="Nhập số không hiệu quả" required>
            </div>
            
            <div class="col-sm-4">
            <label>Đặt hẹn :</label><span class="luuy" style="margin-right:20px">(Thông số thể hiện số lần đặt hẹn)</span>
            <input type="number" name="dathen" class="form-control" value="<?php echo $row['dathen']; ?>" placeholder="Nhập số lần đặt hẹn" required>
            <br>
            <label>Adwords :</label><span class="luuy">(02839293929 và 0939609600)</span>
            <input type="number" name="adwords" class="form-control" value="<?php echo $row['adwords']; ?>" placeholder="Hẹn từ Awords" required>
                <br>
            <label>Facebook :</label><span class="luuy">(0888993929)</span>
            <input type="number" name="facebook" class="form-control" value="<?php echo $row['facebook']; ?>" placeholder="Hẹn từ Facebook" required>
                <br>
            <label>SEO :</label><span class="luuy">(02838329333)</span>
            <input type="number" name="seo" class="form-control" value="<?php echo $row['seo']; ?>" placeholder="Hẹn từ SEO" required>
                
            </div>
            <div class="col-sm-4">
            <br><br><br><br><br><br>
            <button type="submit" class="btn btn-success btn-lg" style="width:95%;" name="submit">Lưu số liệu</button>
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
