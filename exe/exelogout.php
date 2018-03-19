<?php
    session_start();
    ob_start();
    require_once("../config/config.php");
    if(isset($_SESSION['kanguser'])){
        unset($_SESSION['kanguser']);
        header("Refresh:0; url=../login.php");
    }
    header("Refresh:0; url=../login.php");
?>