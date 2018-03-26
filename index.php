<?php 
    ob_start();
    session_start();
    require_once('config/config.php') ;
    if(isset($_SESSION['kanguser'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <?php require_once('templates/header.php'); ?>
    <?php 
    if($_SESSION['kanguser'] != 'nhockool1002'){
        ?>
        <style>
            body{
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
        </style>
        <?php
    }
    ?>
</head>
<body>
    <?php if(isset($_SESSION['kanguser'])){  ?>
    <div class="infouser" style="width: 175px;height: 60px;background-color: black;position: absolute;top: 0;left: 0;background-image: url(https://thumbs.gfycat.com/CheerfulSlimyHorse-size_restricted.gif);
    background-position: 100% 100%;-webkit-user-select:none;-moz-user-select:none;user-select:none;">
        <p>Xin chào, <b><?php echo $_SESSION['kanguser']; ?></b></p>
        <p><a href="exe/exelogout.php" class="btn btn-success btn-xs" style="width:30%;display:block;margin:0 auto;text-align:center;">Logout</a></p>
    </div>
    <style>
    .infouser>p {
    color: #1dff1d;
    text-align: center;
    }   
    </style>
    <?php } ?>
    <div class="wrapper">
        <div class="header">
            <?php require_once('templates/top.php'); 
                $array_ten = array("Thuy","Diem","Loan","Tran");
            ?>
        </div>
        <div class="line"></div>
        <div class="body">
          <?php if(!isset($_GET['page']) || isset($_GET['view'])){ ?>
          <br>
           <div class="container-fluid" style="display:block;text-align:center;">
            <div class="row">
                <div class="col-sm-12">
                <div class="row">
                    <a class="btn btn-danger btn-sm" href="index.php">Xem dữ liệu Adword</a>
                    <a class="btn btn-danger btn-sm" href="index.php?view=gdn">Xem dữ liệu GDN</a>
                    <a class="btn btn-danger btn-sm" href="index.php?view=facebook">Xem dữ liệu Facebook</a>
                    <a class="btn btn-danger btn-sm" href="index.php?view=zalo">Xem dữ liệu Zalo</a>
                    <a class="btn btn-danger btn-sm" href="index.php?view=dienthoai">Xem dữ liệu Điện thoại</a>
                    <a class="btn btn-danger btn-sm" href="index.php?view=coccoc">Xem dữ liệu Coccoc.com</a>
                    <a class="btn btn-danger btn-sm" href="index.php?view=seo">Xem dữ liệu SEO</a>
                </div>
               </div>
            </div>
            </div>
           <?php } ?>
            <div class="container<?php if(!isset($_GET['page']) || $_GET['page'] == 'olddata' || $_GET['page'] == 'olddatacc' || $_GET['page'] == 'olddatagdn'){ echo "-fluid"; } ?>">
                <div class="col-sm-12 bodycontent">
                    <div class="row">
                        <?php
                        if(isset($_GET['page'])){
                            $page = $_GET['page'];
                            switch($page){
                                case "addform" :
                                    require_once("templates/addform.php");
                                    break;
                                case "ndlist" :
                                    require_once("templates/nguonden.php");
                                    break;
                                case "editform" :
                                    require_once("templates/editform.php");
                                    break;
                                case "editformfb" :
                                    require_once("templates/editformfb.php");
                                    break;
                                case "editformzl" :
                                    require_once("templates/editformzl.php");
                                    break;
                                case "editformdt" :
                                    require_once("templates/editformdt.php");
                                    break;
                                case "editformcc" :
                                    require_once("templates/editformcc.php");
                                    break;
                                case "editformgdn" :
                                    require_once("templates/editformgdn.php");
                                    break;
                                case "msklist" :
                                    require_once("templates/msk.php");
                                    break;
                                case "olddata" :
                                    require_once("templates/olddata.php");
                                    break;
                                case "olddataz" :
                                    require_once("templates/olddataz.php");
                                    break;
                                case "olddatal" :
                                    require_once("templates/olddatal.php");
                                    break;
                                case "olddatadt" :
                                    require_once("templates/olddatadt.php");
                                    break;
                                case "olddatacc" :
                                    require_once("templates/olddatacc.php");
                                    break;
                                case "olddatagdn" :
                                    require_once("templates/olddatagdn.php");
                                    break;
                                default :
                                    echo "Đỉa chỉ này không có";
                            }
                        }
                        else require_once("templates/homepage.php");
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php require_once('templates/script.php'); ?>
    <?php require_once('templates/footer.php'); ?>
</body>
    <?php } else header('Location:login.php'); ?>
</html>