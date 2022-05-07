<?php
    $db = new mysqli("localhost","root","","tutorial12");
    if($db -> connect_error)
    {
        echo $db->connect_error;
    }
    else{
    }
?>
    