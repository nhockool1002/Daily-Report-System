       <div class="row">
       <div class="h1title">Nhập dữ liệu FACEBOOK</div>
        </div>
        <br>
         <?php if(isset($_SESSION['flash'])){ ?>
        <div class="row">
            <?php echo $_SESSION['flash']; ?>
        </div>
        <?php 
        unset($_SESSION['flash']);                                   
        } ?>
        <div class="row">
            <div class="formnhaplieu">
            <form method="post" action="exe/addformfb.php">
            <div class="col-sm-4">
            <label>Ngày :</label><span class="luuy">(Ngày tháng năm vui lòng không được để trống)</span>
            <input type="date" name="ngaythang" class="form-control" value="<?php echo $date; ?>" required>
                <br>
            <label>Hiển thị :</label><span class="luuy" style="padding-right:20px;">(Thông số thể hiện hiển thị)</span>
            <input type="number" name="hienthi" class="form-control" placeholder="Nhập số hiển thị" style="" required>
                <br>
            <label>Số nhấp chuột :</label><span class="luuy">(Thông số thể hiện tổng số nhấp chuột)</span>
            <input type="number" name="sonhapchuot" class="form-control" placeholder="Nhập số lần nhấp chuột" required>
                <br>
            <label>Tổng số khách tư vấn :</label><span class="luuy">(Thông số thể hiện tổng số khách tư vấn)</span>
            <input type="number" name="tongsokhachtuvan" class="form-control" placeholder="Nhập tổng số khách tư vấn" required>
            </div>
            <div class="col-sm-4">
            <label>Tổng chi phí :</label><span class="luuy">(Thông số thể hiển tổng chi phí)</span>
            <input type="text" name="tongchiphi" class="form-control" placeholder="Nhập tổng chi phí" required>
                <br>
            <label>Hiệu quả :</label><span class="luuy">(Thông số thể hiện số lượng hiệu quả)</span>
            <input type="number" name="hieuqua" class="form-control" placeholder="Nhập số hiệu quả" required>
                <br>
            <label>Không hiệu quả :</label><span class="luuy">(Thông số thể hiện số lượng không hiệu quả)</span>
            <input type="number" name="khonghieuqua" class="form-control" placeholder="Nhập số không hiệu quả" required>
            <br>
            <label>Đặt hẹn :</label><span class="luuy">(Thông số thể hiện số lần đặt hẹn)</span>
            <input type="number" name="dathen" class="form-control" placeholder="Nhập số lần đặt hẹn" required>
            </div>
            <div class="col-sm-4">
            <label>Giá thành/hẹn :</label><span class="luuy" style="margin-right:20px;">(Nhập giá thành)</span>
            <input type="number" name="giathanh" class="form-control" placeholder="Nhập giá thành" style="width:95%;" required>
            <br>
            <button type="submit" class="btn btn-success btn-lg" style="width:95%;" name="submit">Lưu số liệu</button>
                <br><br>
            <button type="reset" class="btn btn-danger btn-lg" style="width:95%;">Nhập lại</button>
            </div>
            <div class="col-sm-12">
                <p style="font-style:italic;color:red;font-weight:bolder;margin-top:15px;">(*) Vui lòng nhập đủ các trường</p>
            </div>
            </form>
            </div>
        </div>