<?php
require_once("../../config/config.php");
if(isset($_GET['dulieu'])){
    $dulieu = $_GET['dulieu'];
    $sql = "SELECT * FROM masokham where msk like '$dulieu'";
    $rs = $conn->query($sql);
    if($rs->num_rows > 0){
        echo 1;
    }
    else echo 0;
}
?>