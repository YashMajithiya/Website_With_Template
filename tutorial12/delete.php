<?php
        include("include/connection.php");
        $id = isset($_GET['id'])?$_GET['id']:"";
        
            $sql = "delete from tbl_machine where id = $id";
            $db -> query($sql);
        
        header("location:index.php");
?>
    
