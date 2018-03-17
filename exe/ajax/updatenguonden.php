<?php
require_once("../../config/config.php");
    if(isset($_GET['name']) && isset($_GET['id'])){
        $name = $_GET['name'];
        $id = $_GET['id'];
        $sql = "UPDATE `nguonden` SET `nguonden`='$name' WHERE id ='$id'";
        $conn->query($sql);
        echo 1;
    }
?>