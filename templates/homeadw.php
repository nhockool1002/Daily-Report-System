        <div class="row">
        <div class="h1title">Dữ liệu Adword</div>
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
         <?php $getthang = date('m-Y');
            $getname = date('Y');
            echo "<p class='namemonth'>Dữ liệu tháng ".$getthang."</p>"; ?>
            <form method="post" action="index.php?page=olddata">
            <p>Xem dữ liệu khác</p>
            <select class="chonthang" name="chonthang">
                <option value='01'>Tháng 1</option>
                <option value='02'>Tháng 2</option>
                <option value='03'>Tháng 3</option>
                <option value='04'>Tháng 4</option>
                <option value='05'>Tháng 5</option>
                <option value='06'>Tháng 6</option>
                <option value='07'>Tháng 7</option>
                <option value='08'>Tháng 8</option>
                <option value='09'>Tháng 9</option>
                <option value='10'>Tháng 10</option>
                <option value='11'>Tháng 11</option>
                <option value='12'>Tháng 12</option>
            </select>
            <select class="chonnam" name="chonnam">
             <?php for($i=2016;$i<=$getname;$i++){ ?>
                <option value="<?php echo $i; ?>" <?php if($i == $getname){echo "selected";} ?>><?php echo $i; ?></option>
                <?php } ?>
            </select>
            <button type="submit" class="btn btn-info btn-xs" name="submit">Xem danh sách</button>
            </form>
            <hr>
          <br>
           <table id="kooltable" class="display" cellspacing="0" width="100%" id="dttb" style="text-align:center;">
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
                  <th>Không ghi chú/chat cũ</th>
                  <th>DS mã số khám</th>
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
                   $dt = date('Y-m');
            $sql = "SELECT * FROM bangnhap WHERE ngaythang LIKE '%$dt%' ORDER BY id DESC";
            if ($result = $conn->query($sql)) {
                $sum = 0;$sumht =0;$sumnc=0;$sumun=0;$sumts=0;
                $sumhq = 0;$sumkhq=0;$sumdh=0;$sumdk=0;$sumgc=0;
                $sumbqc =0;$sumch=0;$sumtv=0;$sumchq=0;$sumgdh=0;
                $sumgdk =0;
                while ($row = $result->fetch_assoc()) {
                    $date=date_create($row['ngaythang']);
                    $jw = date_format($date,"d/m/Y");
                    $ft = date_format($date,"Y-m-d");
                    $sum = $sum+$row['tongchiphi'];
                    $sumht = $sumht+$row['hienthi'];
                    $sumnc = $sumnc+$row['sonhapchuot'];
                    $sumun = $sumun+$row['uniquevisitor'];
                    $sumts = $sumts+$row['tongsokhachtuvan'];
                    $sumhq = $sumhq+$row['hieuqua'];
                    $sumkhq = $sumkhq+$row['khonghieuqua'];
                    $sumdh = $sumdh+$row['dathen'];
                    $sumdk = $sumdk+$row['denkham'];
                    $sumgc = $sumgc+$row['ghichu'];
                    $sumbqc = $sumbqc+(round($row['tongchiphi']/$row['sonhapchuot']));
                    $sumch = $sumch+(round($row['tongchiphi']/$row['uniquevisitor']));
                    $sumtv = $sumtv+(round($row['tongchiphi']/$row['tongsokhachtuvan']));
                    $sumchq = $sumchq+(round($row['tongchiphi']/$row['hieuqua']));
                    $sumgdh = $sumgdh+(round($row['tongchiphi']/$row['dathen']));
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
                  <td style="background-color:yellow"><?php echo number_format($row['dathen']); ?></td>
                  <td><?php echo $row['denkham']; ?></td>
                   <td><?php echo number_format($row['tongsokhachtuvan']-$row['hieuqua']-$row['khonghieuqua']-$row['dathen']); ?></td>
                   <td><a href="index.php?page=msklist&child=filter&day=<?php echo $ft; ?>"><b>[XEM]</b></a></td>
                   <td><?php echo number_format(round($row['tongchiphi']/$row['sonhapchuot'])); ?></td>
                   <td><?php echo number_format(round($row['tongchiphi']/$row['uniquevisitor'])); ?></td>
                   <td><?php echo number_format(round($row['tongchiphi']/$row['tongsokhachtuvan'])); ?></td>
                   <td><?php echo number_format(round($row['tongchiphi']/$row['hieuqua'])); ?></td>
                   <td><?php echo number_format(round($row['tongchiphi']/$row['dathen'])); ?></td>
                   <td><?php /* if($row['denkham'] == ""){ 
                       $cuoicc = $row['tongchiphi']; 
                       echo number_format(round($row['tongchiphi'])); 
                       } else { 
                           $cuoicc = round($row['tongchiphi']/$row['denkham']); 
                           echo number_format(round($row['tongchiphi']/$row['denkham']));
                        } */ ?>-</td>
                   <td><a style="color:blue;font-weight:bolder;" href="index.php?page=editform&idbangnhap=<?php echo $row['id']; ?>"><i class="fa fa-pencil-square-o"></i></a></td>
                    </tr>
            
                    <?php /* $sumgdk= $sumgdk+$cuoicc; */ } ?>
                           
                                   <tr>
                <td><b>Tổng</b></td>
                <td><b><?php echo number_format($sum); ?></b></td>
                <td><b><?php echo number_format($sumht); ?></b></td>
                <td><b><?php echo number_format($sumnc); ?></b></td>
                <td><b><?php echo number_format($sumun); ?></b></td>
                <td><b><?php echo number_format($sumts); ?></b></td>
                <td><b><?php echo number_format($sumhq); ?></b></td>
                <td><b><?php echo number_format($sumkhq); ?></b></td>
                <td style="background-color:yellow"><b><?php echo number_format($sumdh); ?></b></td>
                <td><b><?php echo number_format($sumdk); ?></b></td>
                <td><b><?php echo number_format($sumgc); ?></b></td>
                <td><b>-</td>
                <td><b><?php echo number_format($sum/$sumnc); ?></b></td>
                <td><b><?php echo number_format($sum/$sumht); ?></b></td>
                <td><b><?php echo number_format($sum/$sumts); ?></b></td>
                <td><b><?php echo number_format($sum/$sumun); ?></b></td>                     
                <td><b><?php echo number_format($sum/$sumdh); ?></b></td>
                <td><b>-</td>
                <td></td>
                </tr>
                  
            </tbody>
            
            <?php }
            $result->free(); $conn->close(); ?>
    </table>
        </div>