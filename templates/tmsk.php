<br>
<div class="row">
    <form method=post action="exe/addmasokham.php">
        <label>Nhập tên mã số khám :&nbsp;&nbsp;</label><button type="submit" name="submit" class="btn btn-primary themnguonbut" disabled="disabled"><i class="fa fa-forward"></i> Thêm</button><br><br>
        <input type="text" class="form-control onhapmasokham" name="onhapmasokham">
        <br>
        <label>Nguồn đến :</label>
        <select class="form-control" class="chonnguonden" name="chonnguonden" id="chonnguonden">
           <?php 
            $sql="SELECT * FROM nguonden";
            $rs = $conn->query($sql);
            foreach($rs as $row){
            ?>
            <option value="<?php echo $row['id']; ?>"><?php echo $row['nguonden']; ?></option>
            <?php } ?>
        </select>
        <br>
        <div class="nguondencuaseo" style="display:none">
        <label>Nguồn đến seo:</label>
        <select class="form-control" class="chonnguondenseo" name="chonnguondenseo">
           <?php 
            $sql="SELECT * FROM nguondenseo";
            $rs = $conn->query($sql);
            foreach($rs as $row){
            ?>
            <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
            <?php } ?>
        </select>
        </div>
        <br>
        <label>Ngày :</label>
        <select class="form-control" class="chonngaynhap" name="chonngaynhap">
           <?php 
            $sql="SELECT * FROM bangnhap ORDER BY ngaythang DESC";
            $rs = $conn->query($sql);
            foreach($rs as $row){
            $date=date_create($row['ngaythang']);
            $jw = date_format($date,"d/m/Y");
            ?>
            <option value="<?php echo $row['id']; ?>"><?php echo $jw; ?></option>
            <?php } ?>
        </select>
        <div class="showerr">  
        </div>
    </form>
</div>
<?php if(isset($_SESSION['flash'])){ ?>
        <div class="row">
            <?php echo $_SESSION['flash']; ?>
        </div>
        <?php 
        unset($_SESSION['flash']);                                   
} ?>