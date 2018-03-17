<?php
    require_once("../../config/config.php");
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "SELECT * FROM nguonden WHERE id = '$id'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        echo json_encode($row);
    }
?>