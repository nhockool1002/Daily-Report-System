<div class="container-fluid">
    <div class="col-sm-6">
        <br>
        <div class="row">
           <table class="display" id="kooltable" width="100%">
             <thead>
              <tr>
                  <th>ID</th>
                  <th>Tên</th>
                  <th>Sửa</th>
              </tr>          
            </thead>
            <tbody>
            <?php
            $sql = "SELECT * FROM nguonden ORDER BY id DESC";
            if ($result = $conn->query($sql)) {
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <tr>
                  <td><?php echo $row['id']; ?></td>
                  <td><?php echo $row['nguonden']; ?></td>
                  <td class="suanguonden" data-id="<?php echo $row['id']; ?>"><i class="fa fa-pencil-square-o"></i></td>
                    </tr>
                    <?php
                }
                $result->free();
                $conn->close();
            }
            ?>
            </tbody>
            </table>
        </div>
    </div>
    <div class="col-sm-6">
        <label>Tên :</label><span style="color:red;font-weight:bolder;float:right;">(*) Vui lòng nhấn kiểm tra tên vừa nhập, trước khi nhấn đồng ý.</span>
        <input type="text" class="form-control osuaten" /><br>
        <input type="hidden" class="form-control oid" /><br>
        <br>
        <div class="showmessage" style="margin-top:-50px;"></div>
        <div style="text-align:center">
        <button type="button" class="btn btn-info ktbut" disabled="disabled">Kiểm tra</button>
        <button type="button" class="btn btn-success dybut" disabled="disabled">Đồng ý</button>
        </div>
    </div>
</div>
