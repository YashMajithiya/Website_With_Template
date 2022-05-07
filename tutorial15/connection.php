<?php 
$db=mysqli_connect("localhost","root","","clubuvdb");
if($db->connect_errno)
{
    die("connection error".$db->connect_error);
}

?>