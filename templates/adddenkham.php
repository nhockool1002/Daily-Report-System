<div class="row">
       <div class="h1title" style="padding-left:30px;">Nhập đến khám</div>
        </div>
        <br>
         <?php if(isset($_SESSION['flash'])){ ?>
        <div class="row">
            <?php echo $_SESSION['flash']; ?>
        </div>
        <?php 
        unset($_SESSION['flash']);                                   
        } ?>
        <div class="row">
            <div class="formnhaplieu">
            <form method="post" action="exe/adddenkham.php">
            <div class="col-sm-10">
            <label>Ngày :</label><span class="luuy">(Ngày tháng năm vui lòng không được để trống)</span>
            <select name="ngaythang" class="form-control">
                <?php
                    $sql = "SELECT ngaythang FROM bangnhap ORDER BY ngaythang DESC";
                    $rs = $conn->query($sql);
                    $rs->fetch_assoc();
                    foreach($rs as $row){
                        $date=date_create($row['ngaythang']);
                        $jw = date_format($date,"d/m/Y");
                ?>
                <option value="<?php echo $row['ngaythang']; ?>"><?php echo $jw; ?></option>
                <?php
                    } 
                ?>
            </select>
                <br>
            <label>Khách đến khám :</label><span class="luuy">(Thông số thể hiện số lượng khách đến khám)</span>
            <input type="number" name="denkham" class="form-control" placeholder="Số lượng khách đến khám" required>
            <br>
            <button type="submit" class="btn btn-success btn-lg" style="width:95%;" name="submit">Lưu số liệu</button>
            </div>
            <div class="col-sm-12">
                <p style="font-style:italic;color:red;font-weight:bolder;margin-top:15px;">(*) Vui lòng nhập đủ các trường</p>
            </div>
            </form>
            </div>
        </div>