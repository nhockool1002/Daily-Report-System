<div class="container-fluid">
    <div class="col-sm-12">
    <?php 
        if(isset($_GET['view'])){
            $view = $_GET['view'];
            switch($view){
                case "facebook" :
                    require_once('templates/homefacebook.php');
                    break;
                case "zalo" :
                    require_once('templates/homezalo.php');
                    break;
                default :
                    echo "Sai đường";
            }
        }
        else{
            require_once('templates/homeadw.php');
        }
    ?>
    </div>
</div>
