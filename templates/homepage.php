<div class="container-fluid">
    <div class="col-sm-12">
        <div class="row">
        <div class="h1title">Trang chủ</div>
        </div>
        <br>
        <?php require_once('templates/stat.php'); ?>
        <div class="row">
          <br><br>
          <?php if(isset($_SESSION['flash'])){ ?>
        <div class="row">
            <?php echo $_SESSION['flash'];
                    unset($_SESSION['flash']);
                                            
                                             } ?>
        </div>
          <br>
           <table id="kooltable" class="display" cellspacing="0" width="100%" id="dttb">
             <thead>
            <tr>
                <th>Ngày tháng</th>
                  <th>Tổng chi phí</th>
                  <th>Hiển thị</th>
                  <th>Số nhấp chuột</th>
                  <th>Unique Visitors</th>
                  <th>Tổng số khách tư vấn</th>
                  <th>Hiệu quả</th>
                  <th>Không hiệu quả</th>
                  <th>Đặt hẹn</th>
                  <th>Đến khám</th>
                  <th>DS mã số khám</th>
                  <th>Ghi chú</th>
                  <th>Bình quân giá click</th>
                  <th>Bình quân giá chuyển hóa</th>
                  <th>Bình quân giá tư vấn</th>
                  <th>Giá thành lượt chát hiệu quả</th>
                  <th>Bình quân giá đặt hẹn</th>
                  <th>Giá thành đến khám</th>
                  <th>Sửa</th>
            </tr>
            </thead>       
               <tbody>
               <?php
            $sql = "SELECT * FROM bangnhap ORDER BY id DESC";
            if ($result = $conn->query($sql)) {
                $sum = 0;
                while ($row = $result->fetch_assoc()) {
                    $date=date_create($row['ngaythang']);
                    $jw = date_format($date,"d/m/Y");
                    $ft = date_format($date,"Y-m-d");
                    $sum = $sum+$row['tongchiphi'];
                    ?>
            <tr>
                    <td><?php echo $jw; ?></td>
                  <td><?php echo number_format($row['tongchiphi']); ?></td>
                  <td><?php echo number_format($row['hienthi']); ?></td>
                  <td><?php echo number_format($row['sonhapchuot']); ?></td>
                  <td><?php echo number_format($row['uniquevisitor']); ?></td>
                  <td><?php echo number_format($row['tongsokhachtuvan']); ?></td>
                  <td><?php echo number_format($row['hieuqua']); ?></td>
                  <td><?php echo number_format($row['khonghieuqua']); ?></td>
                  <td><?php echo number_format($row['dathen']); ?></td>
                  <td><?php echo number_format($row['denkham']); ?></td>
                   <td><a href="index.php?page=msklist&child=filter&day=<?php echo $ft; ?>"><b>[XEM]</b></a></td>
                   <td><?php echo $row['ghichu']; ?></td>
                   <td><?php echo number_format(round($row['tongchiphi']/$row['sonhapchuot'])); ?></td>
                   <td><?php echo number_format(round($row['tongchiphi']/$row['uniquevisitor'])); ?></td>
                   <td><?php echo number_format(round($row['tongchiphi']/$row['tongsokhachtuvan'])); ?></td>
                   <td><?php echo number_format(round($row['tongchiphi']/$row['hieuqua'])); ?></td>
                   <td><?php echo number_format(round($row['tongchiphi']/$row['dathen'])); ?></td>
                   <td><?php if($row['denkham'] == 0){ } else echo number_format(round($row['tongchiphi']/$row['denkham'])); ?></td>
                   <td><a href="index.php?page=editform&idbangnhap=<?php echo $row['id']; ?>"><i class="fa fa-pencil-square-o"></i></a></td>
                    </tr>
            
                           <?php } ?>
                           
            <?php }
            $result->free(); $conn->close(); ?>
            </tbody>
    </table>
        </div>
    </div>
</div>
