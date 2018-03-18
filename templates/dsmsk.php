<div class="container-fluid">
    <div class="col-sm-6">
        <br>
        <div class="row">
            <table class="bangdulieu">
              <tr>
                    <td>Ngày</td>
                  <td>MSK</td>
                  <td>Nguồn đến</td>
                  <td>Sửa</td>
              </tr>          
           
            <?php
            $sql = "SELECT masokham.id,msk,nguonden,bangnhap.ngaythang FROM `masokham` INNER JOIN `bangnhap` ON masokham.idbangnhap = bangnhap.id INNER JOIN `nguonden` ON masokham.idnguonden = nguonden.id ORDER BY bangnhap.ngaythang DESC";
            if ($result = $conn->query($sql)) {
                while ($row = $result->fetch_assoc()) {
                    $date=date_create($row['ngaythang']);
                $jw = date_format($date,"d/m/Y");
                    ?>
                    <tr>
                  <td><?php echo $jw; ?></td>
                  <td><?php echo $row['msk']; ?></td>
                  <td><?php echo $row['nguonden']; ?></td>
                  <td class="suamasokham" data-id="<?php echo $row['id']; ?>"><i class="fa fa-pencil-square-o"></i></td>
                    </tr>
                    <?php
                }
                $result->free();
            }
            ?>
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
