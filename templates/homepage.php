<div class="container-fluid">
    <div class="col-sm-12">
        <div class="row">
        <div class="h1title">Trang chủ</div>
        </div>
        <br>
        <?php require_once('templates/stat.php'); ?>
        <div class="row">
           <table class="bangdulieu">
              <tr>
                  <td>Ngày tháng</td>
                  <td>Tổng chi phí</td>
                  <td>Hiển thị</td>
                  <td>Số nhấp chuột</td>
                  <td>Unique Visitors</td>
                  <td>Tổng số khách tư vấn</td>
                  <td>Hiệu quả</td>
                  <td>Không hiệu quả</td>
                  <td>Đặt hẹn</td>
                  <td>Đến khám</td>
                  <td>Ghi chú</td>
                  <td>DS mã số khám</td>
                  <td>Bình quân giá click</td>
                  <td>Bình quân giá chuyển hóa</td>
                  <td>Bình quân giá tư vấn</td>
                  <td>Giá thành lượt chát hiệu quả</td>
                  <td>Bình quân giá đặt hẹn</td>
                  <td>Giá thành đến khám</td>
                  <td>Sửa</td>
              </tr>          
           
            <?php
            $sql = "SELECT * FROM bangnhap ORDER BY id DESC";
            if ($result = $conn->query($sql)) {
                while ($row = $result->fetch_assoc()) {
                    $date=date_create($row['ngaythang']);
                    $jw = date_format($date,"d/m/Y");
                    ?>
                    <tr>
                    <td><?php echo $jw; ?></td>
                  <td><?php echo $row['tongchiphi']; ?></td>
                  <td><?php echo $row['hienthi']; ?></td>
                  <td><?php echo $row['sonhapchuot']; ?></td>
                  <td><?php echo $row['uniquevisitor']; ?></td>
                  <td><?php echo $row['tongsokhachtuvan']; ?></td>
                  <td><?php echo $row['hieuqua']; ?></td>
                  <td><?php echo $row['khonghieuqua']; ?></td>
                  <td><?php echo $row['dathen']; ?></td>
                  <td><?php echo $row['denkham']; ?></td>
                  <td><?php echo $row['ghichu']; ?></td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
                    </tr>
                    <?php
                }
                $result->free();
                $conn->close();
            }
            ?>
            </table>
        </div>
    </div>
</div>
