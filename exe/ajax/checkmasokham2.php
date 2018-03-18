<?php
require_once("../../config/config.php");
    if(isset($_GET['name']) && isset($_GET['id'])){
        $name = $_GET['name'];
        $id = $_GET['id'];
        
        $sql1 = "SELECT * FROM masokham WHERE id = '$id'";
        $stmt = $conn->prepare($sql1);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        $tencu = $row['msk'];
        
        $sql = "SELECT * FROM masokham where msk like '$name'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        $row2 = $result->fetch_assoc();
        $tenmoi = $row2['msk'];
        if($result->num_rows >0){
            if($tenmoi == $tencu){
                echo 2;
            }
            else echo 1;
        }
        else echo 0;
    }
?>