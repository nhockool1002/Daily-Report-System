<div class="row">
        <div class="h1title">Tổng chi phí</div>
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
            </tr>
            </thead>       
               <tbody>
               <?php $nam = date("Y"); ?>
               <?php $thang = date("m"); ?>
               <?php $ngthang = $nam."-".$thang; ?>
               <?php 
               $sql = "SELECT ngaythang FROM bangnhap";
               $rs = $conn->query($sql);
               $rs->fetch_assoc();
               $sum = 0;$sumht =0;$sumnc=0;$sumun=0;$sumts=0;
                $sumhq = 0;$sumkhq=0;$sumdh=0;$sumdk=0;$sumgc=0;
                $sumbqc =0;$sumch=0;$sumtv=0;$sumchq=0;$sumgdh=0;
                $sumgdk =0;
               foreach($rs as $row){
                
                $date=date_create($row['ngaythang']);
                $jw = date_format($date,"d/m/Y");
                $day = date_format($date,"Y-m-d");
                $ft = date_format($date,"Y-m-d");

                $total = "SELECT bangnhap.ngaythang, 
                SUM(bangnhap.tongchiphi) as tongchiphi,
                SUM(bangnhap.hienthi) as hienthi ,
                SUM(bangnhap.sonhapchuot) as sonhapchuot ,
                SUM(bangnhap.uniquevisitor) as uniquevisitor , 
                SUM(bangnhap.tongsokhachtuvan + bangnhapdt.tongsokhachtuvan) as tongsokhachtuvan , 
                SUM(bangnhap.hieuqua + bangnhapdt.hieuqua) as hieuqua ,
                SUM(bangnhap.khonghieuqua + bangnhapdt.khonghieuqua) as khonghieuqua ,
                SUM(bangnhap.dathen + bangnhapdt.dathen) as dathen , 
                SUM(bangnhap.ghichu) as ghichu FROM bangnhap JOIN bangnhapdt 
                WHERE bangnhap.ngaythang = '$day%' AND bangnhapdt.ngaythang = '$day%' AND bangnhap.ngaythang LIKE '$ngthang%'";
                $stmt = $conn->prepare($total);
                $stmt->execute();
                $result = $stmt->get_result();
                $rowz = $result->fetch_assoc();

                $sum = $sum+$rowz['tongchiphi'];
                $sumht = $sumht+$rowz['hienthi'];
                $sumnc = $sumnc+$rowz['sonhapchuot'];
                $sumun = $sumun+$rowz['uniquevisitor'];
                $sumts = $sumts+$rowz['tongsokhachtuvan'];
                $sumhq = $sumhq+$rowz['hieuqua'];
                $sumkhq = $sumkhq+$rowz['khonghieuqua'];
                $sumdh = $sumdh+$rowz['dathen'];
                $sumgc = $sumgc+$rowz['ghichu'];
               ?>
            <tr>
                    <td><?php echo $jw; ?></td>
                  <td><?php echo  number_format($rowz['tongchiphi']); ?></td>
                  <td><?php echo  number_format($rowz['hienthi']); ?></td>
                  <td><?php echo  number_format($rowz['sonhapchuot']); ?></td>
                  <td><?php echo  number_format($rowz['uniquevisitor']); ?></td>
                  <td><?php echo  number_format($rowz['tongsokhachtuvan']); ?></td>
                  <td><?php echo  number_format($rowz['hieuqua']); ?></td>
                  <td><?php echo  number_format($rowz['khonghieuqua']); ?></td>
                  <td style="background-color:yellow"><?php echo $rowz['dathen']; ?></td>
                  <td></td>
                   <td><?php echo number_format($rowz['ghichu']); ?></td>
                   <td><a href="index.php?page=msklist&child=filter&day=<?php echo $ft; ?>"><b>[XEM]</b></a></td>
                   <td><?php if($rowz['sonhapchuot'] == NULL ){$rowz['sonhapchuot'] == 1;echo "0";} else {echo number_format(round($rowz['tongchiphi']/$rowz['sonhapchuot']));} ?></td>
                   <td><?php if($rowz['uniquevisitor'] == NULL ){$rowz['uniquevisitor'] == 1;echo "0";} else {echo number_format(round($rowz['tongchiphi']/$rowz['uniquevisitor']));} ?></td>
                   <td><?php if($rowz['tongsokhachtuvan'] == NULL ){$rowz['tongsokhachtuvan'] == 1;echo "0";} else {echo number_format(round($rowz['tongchiphi']/$rowz['tongsokhachtuvan']));} ?></td>
                   <td><?php if($rowz['hieuqua'] == NULL ){$rowz['hieuqua'] == 1;echo "0";} else {echo number_format(round($rowz['tongchiphi']/$rowz['hieuqua']));} ?></td>
                   <td><?php if($rowz['dathen'] == NULL ){$rowz['dathen'] == 1;echo "0";} else {echo number_format(round($rowz['tongchiphi']/$rowz['dathen']));} ?></td>
                   <td><?php echo  number_format($rowz['tongchiphi']); ?></td>
                    </tr>
               <?php  }
                ?>      

                  <tr>
                <td>Tổng</td>
                <td><?php echo number_format($sum); ?></td>
                <td><?php echo number_format($sumht); ?></td>
                <td><?php echo number_format($sumnc); ?></td>
                <td><?php echo number_format($sumun); ?></td>
                <td><?php echo number_format($sumts); ?></td>
                <td><?php echo number_format($sumhq); ?></td>
                <td><?php echo number_format($sumkhq); ?></td>
                <td style="background-color:yellow"><?php echo number_format($sumdh); ?></td>
                <td>-</td>
                <td><?php echo number_format($sumgc); ?></td>
                <td>-</td>
                <td><?php echo number_format($sumbqc); ?></td>
                <td><?php echo number_format($sumch); ?></td>
                <td><?php echo number_format($sumtv); ?></td>
                <td><?php echo number_format($sumchq); ?></td>                     
                <td><?php echo number_format($sumgdh); ?></td>
                <td><?php echo number_format($sum); ?></td>
                </tr> 
            </tbody>
            
    </table>
        </div>