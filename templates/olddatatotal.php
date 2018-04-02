<div class="container-fluid">
    <div class="col-sm-12">
        <div class="row">
        <div class="h1title">Bảng cũ</div>
        </div>
        <br>
        <div class="row">
            <form method="post" action="index.php?page=olddatatotal">
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
                 <?php 
                $getname = date('Y');
                for($i=2016;$i<=$getname;$i++){ ?>
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php } ?>
            </select>
            <button type="submit" class="btn btn-info btn-xs" name="submit">Xem danh sách</button>
            </form>
            <hr>
        </div>
        <br>
        <div class="row">
        <?php
          if(isset($_POST['submit'])){
              $nam = $_POST['chonnam'];
              $thang = $_POST['chonthang'];
              $ngthang = $nam."-".$thang;
          }  
        ?>
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
               <?php 
               $sql = "SELECT ngaythang FROM bangnhap WHERE ngaythang LIKE '$ngthang%'";
               echo $sql;
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

                // TINH SUM ALL
                $sumtcp =0;
                $sql1 = "SELECT count(tongchiphi) as dem, tongchiphi FROM bangnhap WHERE bangnhap.ngaythang = '$day%'";
                $stmtrs = $conn->prepare($sql1);
                $stmtrs->execute();
                $resultz = $stmtrs->get_result();
                $rowtcp = $resultz->fetch_assoc();
                if($rowtcp['dem'] > 0){
                  $sumtcp+=$rowtcp['tongchiphi'];
                }
                $sumhtzz =0;
                $sql2 = "SELECT count(tongchiphi) as dem, tongchiphi FROM bangnhapgdn WHERE bangnhapgdn.ngaythang = '$day%'";
                $stmtrs2 = $conn->prepare($sql2);
                $stmtrs2->execute();
                $resultz2 = $stmtrs2->get_result();
                $rowht = $resultz2->fetch_assoc();
                if($rowht['dem'] > 0){
                  $sumhtzz+=$rowht['tongchiphi'];
                }

                $sumtcpcc =0;
                $sql3 = "SELECT count(tongchiphi) as dem, tongchiphi FROM bangnhapcc WHERE bangnhapcc.ngaythang = '$day%'";
                $stmtrs3 = $conn->prepare($sql3);
                $stmtrs3->execute();
                $resultz3 = $stmtrs3->get_result();
                $rowhtcc = $resultz3->fetch_assoc();
                if($rowhtcc['dem'] > 0){
                  $sumtcpcc+=$rowhtcc['tongchiphi'];
                }

                $sumtcpfb =0;
                $sql4 = "SELECT count(tongchiphi) as dem, tongchiphi FROM bangnhapfb WHERE bangnhapfb.ngaythang = '$day%'";
                $stmtrs4 = $conn->prepare($sql4);
                $stmtrs4->execute();
                $resultz4 = $stmtrs4->get_result();
                $rowhtfb = $resultz4->fetch_assoc();
                if($rowhtfb['dem'] > 0){
                  $sumtcpfb+=$rowhtfb['tongchiphi'];
                }
                $tongchiphi = $sumtcp+ $sumhtzz+ $sumtcpcc+ $sumtcpfb;



                // SUM HIENTHI ALL
                $sumhtbn =0;
                $sql5 = "SELECT count(hienthi) as dem, hienthi FROM bangnhap WHERE bangnhap.ngaythang = '$day%'";
                $stmtrs5 = $conn->prepare($sql5);
                $stmtrs5->execute();
                $resultz5 = $stmtrs5->get_result();
                $htbn = $resultz5->fetch_assoc();
                if($htbn['dem'] > 0){
                  $sumhtbn+=$htbn['hienthi'];
                }
                $sumhtgdn =0;
                $sql6 = "SELECT count(hienthi) as dem, hienthi FROM bangnhapgdn WHERE bangnhapgdn.ngaythang = '$day%'";
                $stmtrs6 = $conn->prepare($sql6);
                $stmtrs6->execute();
                $resultz6 = $stmtrs6->get_result();
                $htgdn = $resultz6->fetch_assoc();
                if($htgdn['dem'] > 0){
                  $sumhtgdn+=$htgdn['hienthi'];
                }
                $sumhtfb =0;
                $sql7 = "SELECT count(hienthi) as dem, hienthi FROM bangnhapfb WHERE bangnhapfb.ngaythang = '$day%'";
                $stmtrs7 = $conn->prepare($sql7);
                $stmtrs7->execute();
                $resultz7 = $stmtrs7->get_result();
                $htfb = $resultz7->fetch_assoc();
                if($htfb['dem'] > 0){
                  $sumhtfb+=$htfb['hienthi'];
                }
                $sumhtccc =0;
                $sql8 = "SELECT count(hienthi) as dem, hienthi FROM bangnhapcc WHERE bangnhapcc.ngaythang = '$day%'";
                $stmtrs8 = $conn->prepare($sql8);
                $stmtrs8->execute();
                $resultz8 = $stmtrs8->get_result();
                $htcc = $resultz8->fetch_assoc();
                if($htcc['dem'] > 0){
                  $sumhtccc+=$htcc['hienthi'];
                }
                $hienthi = $sumhtbn+$sumhtgdn+$sumhtfb+$sumhtccc;

                //SUM TONG SO NHAP CHUOT 
                $sumsncadw =0;
                $sql9 = "SELECT count(sonhapchuot) as dem, sonhapchuot FROM bangnhap WHERE bangnhap.ngaythang = '$day%'";
                $stmtrs9 = $conn->prepare($sql9);
                $stmtrs9->execute();
                $resultz9 = $stmtrs9->get_result();
                $sncadw = $resultz9->fetch_assoc();
                if($sncadw['dem'] > 0){
                  $sumsncadw+=$sncadw['sonhapchuot'];
                }
                $sumsncgdn =0;
                $sql10 = "SELECT count(sonhapchuot) as dem, sonhapchuot FROM bangnhapgdn WHERE bangnhapgdn.ngaythang = '$day%'";
                $stmtrs10 = $conn->prepare($sql10);
                $stmtrs10->execute();
                $resultz10 = $stmtrs10->get_result();
                $sncgdn = $resultz10->fetch_assoc();
                if($sncgdn['dem'] > 0){
                  $sumsncgdn+=$sncgdn['sonhapchuot'];
                }
                $sumsncfb =0;
                $sql11 = "SELECT count(sonhapchuot) as dem, sonhapchuot FROM bangnhapfb WHERE bangnhapfb.ngaythang = '$day%'";
                $stmtrs11 = $conn->prepare($sql11);
                $stmtrs11->execute();
                $resultz11 = $stmtrs11->get_result();
                $sncfb = $resultz11->fetch_assoc();
                if($sncfb['dem'] > 0){
                  $sumsncfb+=$sncfb['sonhapchuot'];
                }
                $sumsncccc =0;
                $sql12 = "SELECT count(sonhapchuot) as dem, sonhapchuot FROM bangnhapcc WHERE bangnhapcc.ngaythang = '$day%'";
                $stmtrs12 = $conn->prepare($sql12);
                $stmtrs12->execute();
                $resultz12 = $stmtrs12->get_result();
                $snccc = $resultz12->fetch_assoc();
                if($snccc['dem'] > 0){
                  $sumsncccc+=$snccc['sonhapchuot'];
                }
                $sonhapchuot = $sumsncadw+$sumsncgdn+$sumsncfb+$sumsncccc;

                //Unique Total
                $sumunadw =0;
                $sql13 = "SELECT count(uniquevisitor) as dem, uniquevisitor FROM bangnhap WHERE bangnhap.ngaythang = '$day%'";
                $stmtrs13 = $conn->prepare($sql13);
                $stmtrs13->execute();
                $resultz13 = $stmtrs13->get_result();
                $unadw = $resultz13->fetch_assoc();
                if($unadw['dem'] > 0){
                  $sumunadw+=$unadw['uniquevisitor'];
                }
                $sumungdn =0;
                $sql14 = "SELECT count(uniquevisitor) as dem, uniquevisitor FROM bangnhapgdn WHERE bangnhapgdn.ngaythang = '$day%'";
                $stmtrs14 = $conn->prepare($sql14);
                $stmtrs14->execute();
                $resultz14 = $stmtrs14->get_result();
                $ungdn = $resultz14->fetch_assoc();
                if($ungdn['dem'] > 0){
                  $sumungdn+=$ungdn['uniquevisitor'];
                }
                $sumuncc =0;
                $sql15 = "SELECT count(uniquevisitor) as dem, uniquevisitor FROM bangnhapcc WHERE bangnhapcc.ngaythang = '$day%'";
                $stmtrs15 = $conn->prepare($sql15);
                $stmtrs15->execute();
                $resultz15 = $stmtrs15->get_result();
                $uncc = $resultz15->fetch_assoc();
                if($uncc['dem'] > 0){
                  $sumuncc+=$uncc['uniquevisitor'];
                }
                $uniquevistor = $sumunadw+$sumungdn+$sumuncc;

                // TONGSOKHACHTUVAN
                $sumtskadw =0;
                $sql16 = "SELECT count(tongsokhachtuvan) as dem, tongsokhachtuvan FROM bangnhap WHERE bangnhap.ngaythang = '$day%'";
                $stmtrs16 = $conn->prepare($sql16);
                $stmtrs16->execute();
                $resultz16 = $stmtrs16->get_result();
                $tskadw = $resultz16->fetch_assoc();
                if($tskadw['dem'] > 0){
                  $sumtskadw+=$tskadw['tongsokhachtuvan'];
                }
                $sumtskgdn =0;
                $sql17 = "SELECT count(tongsokhachtuvan) as dem, tongsokhachtuvan FROM bangnhapgdn WHERE bangnhapgdn.ngaythang = '$day%'";
                $stmtrs17 = $conn->prepare($sql17);
                $stmtrs17->execute();
                $resultz17 = $stmtrs17->get_result();
                $tskgdn = $resultz17->fetch_assoc();
                if($tskgdn['dem'] > 0){
                  $sumtskgdn+=$tskgdn['tongsokhachtuvan'];
                }
                $sumtskcc =0;
                $sql18 = "SELECT count(tongsokhachtuvan) as dem, tongsokhachtuvan FROM bangnhapcc WHERE bangnhapcc.ngaythang = '$day%'";
                $stmtrs18 = $conn->prepare($sql18);
                $stmtrs18->execute();
                $resultz18 = $stmtrs18->get_result();
                $tskcc = $resultz18->fetch_assoc();
                if($tskcc['dem'] > 0){
                  $sumtskcc+=$tskcc['tongsokhachtuvan'];
                }
                $sumtskdt =0;
                $sql19 = "SELECT count(tongsokhachtuvan) as dem, tongsokhachtuvan FROM bangnhapdt WHERE bangnhapdt.ngaythang = '$day%'";
                $stmtrs19 = $conn->prepare($sql19);
                $stmtrs19->execute();
                $resultz19 = $stmtrs19->get_result();
                $tskdt = $resultz19->fetch_assoc();
               if($tskdt['dem'] > 0){
                 $sumtskdt+=$tskdt['tongsokhachtuvan'];
               }
                $sumtskfb =0;
                $sql20 = "SELECT count(tongsokhachtuvan) as dem, tongsokhachtuvan FROM bangnhapfb WHERE bangnhapfb.ngaythang = '$day%'";
                $stmtrs20 = $conn->prepare($sql20);
                $stmtrs20->execute();
                $resultz20 = $stmtrs20->get_result();
                $tskfb = $resultz20->fetch_assoc();
                if($tskfb['dem'] > 0){
                  $sumtskfb+=$tskfb['tongsokhachtuvan'];
                }
                $sumtskzl =0;
                $sql21 = "SELECT count(tongsokhachtuvan) as dem, tongsokhachtuvan FROM bangnhapzl WHERE bangnhapzl.ngaythang = '$day%'";
                $stmtrs21 = $conn->prepare($sql21);
                $stmtrs21->execute();
                $resultz21 = $stmtrs21->get_result();
                $tskzl = $resultz21->fetch_assoc();
                if($tskzl['dem'] > 0){
                  $sumtskzl+=$tskzl['tongsokhachtuvan'];
                }
                $sumtskseo =0;
                $sql22 = "SELECT count(tongsokhachtuvan) as dem, tongsokhachtuvan FROM bangnhapseo WHERE bangnhapseo.ngaythang = '$day%'";
                $stmtrs22 = $conn->prepare($sql22);
                $stmtrs22->execute();
                $resultz22 = $stmtrs22->get_result();
                $tskseo = $resultz22->fetch_assoc();
                if($tskseo['dem'] > 0){
                  $sumtskseo+=$tskseo['tongsokhachtuvan'];
                }
                $tongsokhachtuvan = $sumtskadw+$sumtskgdn+$sumtskcc+$sumtskdt+$sumtskfb+$sumtskzl+$sumtskseo;
                // TONG HIEU QUA
                $sumhqadw =0;
                $sql23 = "SELECT count(hieuqua) as dem, hieuqua FROM bangnhap WHERE bangnhap.ngaythang = '$day%'";
                $stmtrs23 = $conn->prepare($sql23);
                $stmtrs23->execute();
                $resultz23 = $stmtrs23->get_result();
                $hqadw = $resultz23->fetch_assoc();
                if($hqadw['dem'] > 0){
                  $sumhqadw+=$hqadw['hieuqua'];
                }
                $sumhqdt =0;
                $sql24 = "SELECT count(hieuqua) as dem, hieuqua FROM bangnhapdt WHERE bangnhapdt.ngaythang = '$day%'";
                $stmtrs24 = $conn->prepare($sql24);
                $stmtrs24->execute();
                $resultz24 = $stmtrs24->get_result();
                $hqdt = $resultz24->fetch_assoc();
                if($hqdt['dem'] > 0){
                  $sumhqdt+=$hqdt['hieuqua'];
                }
                $sumhqgdn =0;
                $sql25 = "SELECT count(hieuqua) as dem, hieuqua FROM bangnhapgdn WHERE bangnhapgdn.ngaythang = '$day%'";
                $stmtrs25 = $conn->prepare($sql25);
                $stmtrs25->execute();
                $resultz25 = $stmtrs25->get_result();
                $hqgdn = $resultz25->fetch_assoc();
                if($hqgdn['dem'] > 0){
                  $sumhqgdn+=$hqgdn['hieuqua'];
                }
                $sumhqfb =0;
                $sql26 = "SELECT count(hieuqua) as dem, hieuqua FROM bangnhapfb WHERE bangnhapfb.ngaythang = '$day%'";
                $stmtrs26 = $conn->prepare($sql26);
                $stmtrs26->execute();
                $resultz26 = $stmtrs26->get_result();
                $hqfb = $resultz26->fetch_assoc();
                if($hqfb['dem'] > 0){
                  $sumhqfb+=$hqfb['hieuqua'];
                }
                $sumhqcc =0;
                $sql27 = "SELECT count(hieuqua) as dem, hieuqua FROM bangnhapcc WHERE bangnhapcc.ngaythang = '$day%'";
                $stmtrs27 = $conn->prepare($sql27);
                $stmtrs27->execute();
                $resultz27 = $stmtrs27->get_result();
                $hqcc = $resultz27->fetch_assoc();
                if($hqcc['dem'] > 0){
                  $sumhqcc+=$hqcc['hieuqua'];
                }
                $sumhqzl =0;
                $sql28 = "SELECT count(hieuqua) as dem, hieuqua FROM bangnhapzl WHERE bangnhapzl.ngaythang = '$day%'";
                $stmtrs28 = $conn->prepare($sql28);
                $stmtrs28->execute();
                $resultz28 = $stmtrs28->get_result();
                $hqzl = $resultz28->fetch_assoc();
                if($hqzl['dem'] > 0){
                  $sumhqzl+=$hqzl['hieuqua'];
                }
                $sumhqseo =0;
                $sql29 = "SELECT count(hieuqua) as dem, hieuqua FROM bangnhapseo WHERE bangnhapseo.ngaythang = '$day%'";
                $stmtrs29 = $conn->prepare($sql28);
                $stmtrs29->execute();
                $resultz29 = $stmtrs29->get_result();
                $hqseo = $resultz29->fetch_assoc();
                if($hqseo['dem'] > 0){
                  $sumhqseo+=$hqseo['hieuqua'];
                }
                $hieuqua = $sumhqadw+$sumhqdt+$sumhqgdn+$sumhqfb+$sumhqcc+$sumhqzl+$sumhqseo;

                //Khong hieu qua
                $sumkhqadw =0;
                $sql30 = "SELECT count(khonghieuqua) as dem, khonghieuqua FROM bangnhap WHERE bangnhap.ngaythang = '$day%'";
                $stmtrs30 = $conn->prepare($sql30);
                $stmtrs30->execute();
                $resultz30 = $stmtrs30->get_result();
                $khqadw = $resultz30->fetch_assoc();
                if($khqadw['dem'] > 0){
                  $sumkhqadw+=$khqadw['khonghieuqua'];
                }
                $sumkhqdt =0;
                $sql31 = "SELECT count(khonghieuqua) as dem, khonghieuqua FROM bangnhapdt WHERE bangnhapdt.ngaythang = '$day%'";
                $stmtrs31 = $conn->prepare($sql31);
                $stmtrs31->execute();
                $resultz31 = $stmtrs31->get_result();
                $khqdt = $resultz31->fetch_assoc();
                if($khqdt['dem'] > 0){
                  $sumkhqdt+=$khqdt['khonghieuqua'];
                }
                $sumkhqgdn =0;
                $sql32 = "SELECT count(khonghieuqua) as dem, khonghieuqua FROM bangnhapgdn WHERE bangnhapgdn.ngaythang = '$day%'";
                $stmtrs32 = $conn->prepare($sql32);
                $stmtrs32->execute();
                $resultz32 = $stmtrs32->get_result();
                $khqgdn = $resultz32->fetch_assoc();
                if($hqgdn['dem'] > 0){
                  $sumkhqgdn+=$khqgdn['khonghieuqua'];
                }
                $sumkhqfb =0;
                $sql33 = "SELECT count(khonghieuqua) as dem, khonghieuqua FROM bangnhapfb WHERE bangnhapfb.ngaythang = '$day%'";
                $stmtrs33 = $conn->prepare($sql33);
                $stmtrs33->execute();
                $resultz33 = $stmtrs33->get_result();
                $khqfb = $resultz33->fetch_assoc();
                if($hqfb['dem'] > 0){
                  $sumkhqfb+=$khqfb['khonghieuqua'];
                }
                $sumkhqcc =0;
                $sql34 = "SELECT count(khonghieuqua) as dem, khonghieuqua FROM bangnhapcc WHERE bangnhapcc.ngaythang = '$day%'";
                $stmtrs34= $conn->prepare($sql34);
                $stmtrs34->execute();
                $resultz34 = $stmtrs34->get_result();
                $khqcc = $resultz34->fetch_assoc();
                if($khqcc['dem'] > 0){
                  $sumkhqcc+=$khqcc['khonghieuqua'];
                }
                $sumkhqzl =0;
                $sql35 = "SELECT count(khonghieuqua) as dem, khonghieuqua FROM bangnhapzl WHERE bangnhapzl.ngaythang = '$day%'";
                $stmtrs35 = $conn->prepare($sql35);
                $stmtrs35->execute();
                $resultz35 = $stmtrs35->get_result();
                $khqzl = $resultz35->fetch_assoc();
                if($khqzl['dem'] > 0){
                  $sumkhqzl+=$khqzl['khonghieuqua'];
                }
                $sumkhqseo =0;
                $sql36 = "SELECT count(khonghieuqua) as dem, khonghieuqua FROM bangnhapseo WHERE bangnhapseo.ngaythang = '$day%'";
                $stmtrs36 = $conn->prepare($sql36);
                $stmtrs36->execute();
                $resultz36 = $stmtrs36->get_result();
                $khqseo = $resultz36->fetch_assoc();
                if($khqseo['dem'] > 0){
                  $sumkhqseo+=$khqseo['khonghieuqua'];
                }
                $khonghieuqua = $sumhqadw+$sumhqdt+$sumhqgdn+$sumhqfb+$sumhqcc+$sumhqzl+$sumhqseo;

                //TOTAL DAT HEN
                $sumdhadw =0;
                $sql37 = "SELECT count(dathen) as dem, dathen FROM bangnhap WHERE bangnhap.ngaythang = '$day%'";
                $stmtrs37 = $conn->prepare($sql37);
                $stmtrs37->execute();
                $resultz37 = $stmtrs37->get_result();
                $dhadw = $resultz37->fetch_assoc();
                if($dhadw['dem'] > 0){
                  $sumdhadw+=$dhadw['dathen'];
                }
                $sumdhgdn =0;
                $sql38 = "SELECT count(dathen) as dem, dathen FROM bangnhapgdn WHERE bangnhapgdn.ngaythang = '$day%'";
                $stmtrs38 = $conn->prepare($sql38);
                $stmtrs38->execute();
                $resultz38 = $stmtrs38->get_result();
                $dhgdn = $resultz38->fetch_assoc();
                if($dhgdn['dem'] > 0){
                  $sumdhgdn+=$dhgdn['dathen'];
                }
                $sumdhdt =0;
                $sql39 = "SELECT count(dathen) as dem, dathen FROM bangnhapdt WHERE bangnhapdt.ngaythang = '$day%'";
                $stmtrs39 = $conn->prepare($sql39);
                $stmtrs39->execute();
                $resultz39 = $stmtrs39->get_result();
                $dhdt = $resultz39->fetch_assoc();
                if($dhdt['dem'] > 0){
                  $sumdhdt+=$dhdt['dathen'];
                }
                $sumdhfb =0;
                $sql40 = "SELECT count(dathen) as dem, dathen FROM bangnhapfb WHERE bangnhapfb.ngaythang = '$day%'";
                $stmtrs40 = $conn->prepare($sql40);
                $stmtrs40->execute();
                $resultz40 = $stmtrs40->get_result();
                $dhfb = $resultz40->fetch_assoc();
                if($dhfb['dem'] > 0){
                  $sumdhfb+=$dhfb['dathen'];
                }
                $sumdhcc =0;
                $sql41 = "SELECT count(dathen) as dem, dathen FROM bangnhapcc WHERE bangnhapcc.ngaythang = '$day%'";
                $stmtrs41 = $conn->prepare($sql41);
                $stmtrs41->execute();
                $resultz41 = $stmtrs41->get_result();
                $dhcc = $resultz41->fetch_assoc();
                if($dhcc['dem'] > 0){
                  $sumdhcc+=$dhcc['dathen'];
                }
                $sumdhzl =0;
                $sql42 = "SELECT count(dathen) as dem, dathen FROM bangnhapzl WHERE bangnhapzl.ngaythang = '$day%'";
                $stmtrs42 = $conn->prepare($sql41);
                $stmtrs42->execute();
                $resultz42 = $stmtrs42->get_result();
                $dhzl = $resultz42->fetch_assoc();
                if($dhzl['dem'] > 0){
                  $sumdhzl+=$dhzl['dathen'];
                }
                $sumdhseo =0;
                $sql43 = "SELECT count(dathen) as dem, dathen FROM bangnhapseo WHERE bangnhapseo.ngaythang = '$day%'";
                $stmtrs43 = $conn->prepare($sql43);
                $stmtrs43->execute();
                $resultz43 = $stmtrs43->get_result();
                $dhseo = $resultz43->fetch_assoc();
                if($dhseo['dem'] > 0){
                  $sumdhseo+=$dhseo['dathen'];
                }
                $dathen = $sumdhadw+$sumdhgdn+$sumdhdt+$sumdhfb+$sumdhcc+$sumdhzl+$sumdhseo;



                $total ="SELECT '$tongchiphi' as tongchiphi,'$hienthi' as hienthi, '$sonhapchuot' as sonhapchuot, '$uniquevistor' as uniquevisitor, '$tongsokhachtuvan' as tongsokhachtuvan, '$hieuqua' as hieuqua, '$khonghieuqua' as khonghieuqua, '$dathen' as dathen";
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
                   <td><?php $ghichudz = $rowz['tongsokhachtuvan']-$rowz['hieuqua']-$rowz['khonghieuqua']-$rowz['dathen']; echo number_format($ghichudz);$sumgc+=$ghichudz; ?></td>
                   <td><a href="index.php?page=msklist&child=filter&day=<?php echo $ft; ?>"><b>[XEM]</b></a></td>
                   <td><?php if($rowz['sonhapchuot'] == NULL ){$rowz['sonhapchuot'] == 1;echo "0";} else {$bqcc = $rowz['tongchiphi']/$rowz['sonhapchuot'];echo number_format(round($bqcc));$sumbqc+=$bqcc;} ?></td>
                   <td><?php if($rowz['uniquevisitor'] == NULL ){$rowz['uniquevisitor'] == 1;echo "0";} else {$bqch = $rowz['tongchiphi']/$rowz['uniquevisitor'];echo number_format(round($bqch));$sumch+=$bqch;} ?></td>
                   <td><?php if($rowz['tongsokhachtuvan'] == NULL ){$rowz['tongsokhachtuvan'] == 1;echo "0";} else {$bqtv = $rowz['tongchiphi']/$rowz['tongsokhachtuvan'];echo number_format(round($bqtv));$sumtv+=$bqtv;} ?></td>
                   <td><?php if($rowz['hieuqua'] == NULL ){$rowz['hieuqua'] == 1;echo "0";} else {$chathq = $rowz['tongchiphi']/$rowz['hieuqua'];echo number_format(round($chathq));$sumchq+=$chathq;} ?></td>
                   <td><?php if($rowz['dathen'] == NULL ){$rowz['dathen'] == 1;echo "0";} else {$hqdhs = $rowz['tongchiphi']/$rowz['dathen'];echo number_format(round($hqdhs));$sumgdh+=$hqdhs;} ?></td>
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

    </div>
</div>
