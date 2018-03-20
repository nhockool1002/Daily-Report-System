<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
$date = date('Y-m-d');
?>
<div class="container">
    <div class="col-sm-12">
        <div class="row">
            <a href="index.php?page=addform" class="btn btn-info btn-xs">Nhập dữ liệu Adword</a>
            <a href="index.php?page=addform&form=formfb" class="btn btn-info btn-xs">Nhập dữ liệu Facebook</a>
            <a href="index.php?page=addform&form=formzl" class="btn btn-info btn-xs">Nhập dữ liệu Zalo</a>
        </div>
    </div>
</div>
<hr>
<div class="container">
    <div class="col-sm-12">
        <?php
        if(isset($_GET['page']) && $_GET['page'] == 'addform'){
            if(isset($_GET['form'])){
                $form = $_GET['form'];
                switch($form){
                    case "formfb" :
                        require_once('templates/formfb.php');
                        break;
                    case "formzl" :
                        require_once('templates/formzl.php');
                        break;
                    default :
                        echo "Đi sai đường rồi";
                }
            }
            else{
                require_once('templates/formadw.php');
            }
        }
        ?>
    </div>
</div>
