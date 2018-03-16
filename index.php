<?php require_once('config/config.php') ;?>
<!DOCTYPE html>
<html lang="en">
<head>
     <?php require_once('templates/header.php'); ?>
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <?php require_once('templates/top.php'); ?>
        </div>
        <div class="line"></div>
        <div class="body">
            <div class="container">
                <div class="col-sm-12 bodycontent">
                    <div class="row">
                        <?php
                        if(isset($_GET['page'])){
                            $page = $_GET['page'];
                            switch($page){
                                case "addform" :
                                    require_once("templates/addform.php");
                                    break;
                                default :
                                    echo "Không đúng cmnr";
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
</body>
</html>