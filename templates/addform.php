<div class="container">
    <div class="col-sm-12">
        <div class="row">
        <div class="h1title">Nhập dữ liệu</div>
        </div>
        <br>
        <div class="row">
            <div class="formnhaplieu">
            <form>
            <div class="col-sm-4">
            <label>Ngày :</label><span class="luuy">(Ngày tháng năm vui lòng không được để trống)</span>
            <input type="date" name="ngaythang" class="form-control" required>
                <br>
            <label>Số nhấp chuột :</label><span class="luuy">(Thông số thể hiện tổng số nhấp chuột)</span>
            <input type="number" name="sonhapchuot" class="form-control" placeholder="Nhập số lần nhấp chuột" required>
                <br>
            <label>Tổng số khách tư vấn :</label><span class="luuy">(Thông số thể hiện tổng số khách tư vấn)</span>
            <input type="number" name="tongsokhachtuvan" class="form-control" placeholder="Nhập tổng số khách tư vấn" required>
                <br>
            <label>Không hiệu quả :</label><span class="luuy">(Thông số thể hiện số lượng không hiệu quả)</span>
            <input type="number" name="khonghieuqua" class="form-control" placeholder="Nhập số không hiệu quả" required>
            </div>
            <div class="col-sm-4">
            <label>Tổng chi phí :</label><span class="luuy">(Thông số thể hiển tổng chi phí)</span>
            <input type="text" name="tongchiphi" class="form-control" placeholder="Nhập tổng chi phí" required>
                <br>
            <label>Unique Visitors :</label><span class="luuy">(Thông số thể hiện tổng số lần hiển thị LIVECHAT)</span>
            <input type="number" name="uniquevisitors" class="form-control" placeholder="Nhập số lần hiện livechat" required>
                <br>
            <label>Hiệu quả :</label><span class="luuy">(Thông số thể hiện số lượng hiệu quả)</span>
            <input type="number" name="hieuqua" class="form-control" placeholder="Nhập số hiệu quả" required>
                <br>
            <label>Đặt hẹn :</label><span class="luuy">(Thông số thể hiện số lần đặt hẹn)</span>
            <input type="number" name="dathen" class="form-control" placeholder="Nhập số lần đặt hẹn" required>
                <br>
            </div>
            <div class="col-sm-4">
            <label>Ghi chú :</label><span class="luuy" style="padding-right:20px;">(Ghi chú thêm)</span>
            <textarea name="ghichu" class="form-control" style="width:95%;" placeholder="Nhập ghi chú"></textarea>
                <br>
            <button type="submit" class="btn btn-success btn-lg" style="width:95%;">Lưu số liệu</button>
                <br><br>
            <button type="reset" class="btn btn-danger btn-lg" style="width:95%;">Nhập lại</button>
                <br><br>
            <button type="button" class="btn btn-warning btn-lg" style="width:95%;">Xem số liệu đã lưu</button>
            </div>
            <div class="col-sm-12">
                <p style="font-style:italic;color:red;font-weight:bolder">(*) Vui lòng nhập đủ các trường (Ngoại trừ  "Ghi chú"  là trường tự chọn)</p>
            </div>
            </form>
            </div>
        </div>
    </div>
</div>
