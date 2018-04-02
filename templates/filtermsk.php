<div class="container-fluid">
    <div class="col-sm-6">
        <br>
        <div class="row">
            <table id="kooltable">
             <thead>
              <tr>
                    <th>Ngày</th>
                  <th>MSK</th>
                  <th>Nguồn đến</th>
                  <th>SEO</th>
                  <td>Sửa</td>
              </tr>          
           </thead>
           <tbody>
            <?php
            if(!isset($_GET['day'])){
            $sql = "SELECT masokham.id,msk,nguonden,bangnhap.ngaythang FROM `masokham` INNER JOIN `bangnhap` ON masokham.idbangnhap = bangnhap.id INNER JOIN `nguonden` ON masokham.idnguonden = nguonden.id ORDER BY bangnhap.ngaythang DESC";
            }
            else{
                if(isset($_GET['zone'])){
                    $zone = $_GET['zone'];
                    $day = $_GET['day'];
                    $sql = "SELECT masokham.id, bangnhap.ngaythang,msk,nguonden, nguondenseo.name as name FROM masokham INNER JOIN bangnhap ON masokham.idbangnhap = bangnhap.id INNER JOIN nguonden ON masokham.idnguonden = nguonden.id INNER JOIN nguondenseo ON masokham.idnguondenseo = nguondenseo.id WHERE bangnhap.ngaythang LIKE '$day%' AND nguonden.nguonden = '$zone'";
                }
                else{
                $day = $_GET['day'];
               $sql = "SELECT masokham.id,msk,nguonden,bangnhap.ngaythang FROM `masokham` INNER JOIN `bangnhap` ON masokham.idbangnhap = bangnhap.id INNER JOIN `nguonden` ON masokham.idnguonden = nguonden.id WHERE bangnhap.ngaythang LIKE '$day%' ORDER BY bangnhap.ngaythang DESC"; 
                    }
            }
            if ($result = $conn->query($sql)) {
                while ($row = $result->fetch_assoc()) {
                $date=date_create($row['ngaythang']);
                $jw = date_format($date,"d/m/Y");
                    ?>
                    <tr>
                  <td><?php echo $jw; ?></td>
                  <td><?php echo $row['msk']; ?></td>
                  <td><?php echo $row['nguonden']; ?></td>
                  <td><?php if(isset($row['name'])){ echo $row['name']; } ?></td>
                  <td class="suamasokham" data-id="<?php if(isset($_GET['zone'])){ echo $row['id']; } else { echo $row['id']; } ?>"><i class="fa fa-pencil-square-o"></i></td>
                    </tr>
                    <?php
                }
                $result->free();
            }
            ?>
            </tbody>
            </table>
        </div>
    </div>
    <div class="col-sm-6">
        <label>Tên :</label><span style="color:red;font-weight:bolder;float:right;">(*) Vui lòng nhấn kiểm tra tên vừa nhập, trước khi nhấn đồng ý.</span>
        <input type="text" class="form-control osuate" /><br>
        <label>Nguồn đến :</label>
        <select class="form-control onguondensl" disabled="disabled">
           <?php
            $sql = "SELECT * FROM nguonden";
            if ($result = $conn->query($sql)) {
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['nguonden']; ?></option>
                    <?php
                }
                $result->free();
                
            }
            ?>
        </select>
        <br>
        <label>Bảng nhập :</label>
        <select class="form-control obangnhapsl" disabled="disabled">
           <?php
            $sql = "SELECT * FROM bangnhap";
            if ($result = $conn->query($sql)) {
                while ($row = $result->fetch_assoc()) {
                    $date=date_create($row['ngaythang']);
                $jw = date_format($date,"d/m/Y");
                    ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $jw; ?></option>
                    <?php
                }
                $result->free();
                $conn->close();
            }
            ?>
        </select>
        <input type="hidden" class="form-control oid" /><br>
        <br>
        <div class="showmessagez" style="margin-top:-20px;"></div>
        <div style="text-align:center">
        <button type="button" class="btn btn-info ktbutz" disabled="disabled">Kiểm tra</button>
        <button type="button" class="btn btn-success dybutz" disabled="disabled">Đồng ý</button>
        </div>
    </div>
</div>
