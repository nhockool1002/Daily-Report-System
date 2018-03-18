<div class="container-fluid">
    <div class="col-sm-12">
        <div class="row">
        <div class="h1title">Mã số khám</div>
        </div>
        <br>
        <div class="row">
        <?php require_once('templates/menu-msk.php'); ?>
        </div>
        <?php
        if(isset($_GET['page']) && !isset($_GET['child'])){
                if($_GET['page'] == 'msklist'){
                require_once("templates/dsmsk.php");
                }
            }
        if(isset($_GET['page']) && isset($_GET['child'])){
            if($_GET['page'] == 'msklist'){
                $child = $_GET['child'];
                switch($child){
                    case "tmsk" :
                        require_once("templates/tmsk.php");
                        break;
                    case "tkmsk" :
                        require_once("templates/tkmsk.php");
                        break;
                    default :
                        echo "Đi sai địa chỉ rồi";
                }
            }
        }
        ?>
    </div>
</div>
