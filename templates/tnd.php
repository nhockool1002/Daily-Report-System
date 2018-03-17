<br>
<div class="row">
    <form method=post action="exe/addnguonden.php">
        <label>Nhập tên nguồn đến :&nbsp;&nbsp;</label><button type="submit" name="submit" class="btn btn-primary themnguonbut" disabled="disabled"><i class="fa fa-forward"></i> Thêm</button><br><br>
        <input type="text" class="form-control onhapnguon" name="onhapnguon">
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