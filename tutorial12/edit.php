<?php
    include("include/connection.php");
    $id = isset($_POST['id'])?$_POST['id']:"";
    $machine_name = $_POST['machine_name'];
    $description = $_POST['description'];

    $sql = "update tbl_machine set machine_name = '".$machine_name."' , description = '".$description."' where id =".$id;
    $db->query($sql);
    header("location:index.php");
?>
