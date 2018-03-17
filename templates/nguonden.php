<div class="container-fluid">
    <div class="col-sm-12">
        <div class="row">
        <div class="h1title">Nguồn đến</div>
        </div>
        <br>
        <div class="row">
        <?php require_once('templates/menu-nguonden.php'); ?>
        </div>
        <?php
        if(isset($_GET['page']) && !isset($_GET['child'])){
                if($_GET['page'] == 'ndlist'){
                require_once("templates/dsnd.php");
                }
            }
        if(isset($_GET['page']) && isset($_GET['child'])){
            if($_GET['page'] == 'ndlist'){
                $child = $_GET['child'];
                switch($child){
                    case "tnd" :
                        require_once("templates/tnd.php");
                        break;
                    case "tknd" :
                        require_once("templates/tknd.php");
                        break;
                    default :
                        echo "Đi sai địa chỉ rồi";
                }
            }
        }
        ?>
    </div>
</div>
