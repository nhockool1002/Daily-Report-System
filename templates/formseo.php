       <div class="row">
       <div class="h1title">Nhập dữ liệu SEO</div>
        </div>
        <br>
         <?php if(isset($_SESSION['flash'])){ ?>
        <div class="row">
            <?php echo $_SESSION['flash']; ?>
        </div>
        <?php 
        unset($_SESSION['flash']);                                   
        } ?>
        <div class="row">
           <?php 
            $total = array();
            $sql = "SELECT * FROM seo";
            $rs = $conn->query($sql);
            $rs->fetch_assoc();
            foreach($rs as $row){
               $total[] = $row['ndseo'];
            }
            var_dump($total);
            $length = count($total);
            for($i=0;$i>=$length;$i++){
                echo $total[$i];
                echo "<input class='but' name='".$total[$i]."-name' />";
            }
            ?>
        </div>