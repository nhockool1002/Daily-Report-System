<?php
require_once("../../config/config.php");
    if(isset($_GET['name']) && isset($_GET['id']) && isset($_GET['idbangnhap']) && isset($_GET['idnguonden'])){
        $name = $_GET['name'];
        $id = $_GET['id'];
        $idnguonden = $_GET['idnguonden'];
        $idbangnhap = $_GET['idbangnhap'];
        $sql = "UPDATE `masokham` SET `msk`='$name',`idbangnhap`='$idbangnhap',`idnguonden`='$idnguonden' WHERE id ='$id'";
        $conn->query($sql);
        echo 1;
    }
?>