<?php
    include("include/connection.php");
    $machine_name=isset($_POST['machine_name'])?$_POST['machine_name']:"";
    $description=isset($_POST['description'])?$_POST['description']:"";
    $sql = "insert into tbl_machine(machine_name,description)values('$machine_name','$description')";
    $db->query($sql);
    header("location:index.php");
?>