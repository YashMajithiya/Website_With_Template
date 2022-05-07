<?php
      $db=new mysqli("localhost","root","","rkuniversity");
      if($db->connect_errno)
      {
        echo $db->connect_error;
      }
      else
      {
        echo "Database connected sucessfully";
      }
?>