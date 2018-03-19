<?php
$demmsk = "SELECT * FROM masokham";
$rs = $conn->query($demmsk);
$slmsk = $rs->num_rows;

$demnd = "SELECT * FROM nguonden";
$nd = $conn->query($demnd);
$slnd = $nd->num_rows;
?>
       <div class="row thongso">
        <div class="col-sm-3 othunhat">
            <p>1231</p>
            <p>Lượt truy cập</p>
        </div>
        <div class="col-sm-3 othuhai">
            <p>1231</p>
            <p>Lượt truy cập</p>
        </div>
        <div class="col-sm-3  othuba">
            <p><?php echo $slmsk; ?></p>
            <p>MÃ SỐ KHÁM</p>
        </div>
        <div class="col-sm-3  othutu">
            <p><?php echo $slnd; ?></p>
            <p>NGUỒN ĐẾN</p>
        </div>
</div>