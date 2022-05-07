<?php 
include("connection.php");
$mem=$_GET["id"];
$sql="delete from members where id=$mem";
$db->query($sql);
if($db)
{
    header("Location:index.php");
    exit();
}
else{
    echo "error";
}
?>