<?php
     session_start();
     $username = isset($_POST['username'])?$_POST['username']:"";
     $password = isset($_POST['password'])?$_POST['password']:"";
     if($username=="admin@gmail.com" && $password=="123456" ){
      $_SESSION['data']=20;
     header("location:index.php");
    }
    else{
        header("location:login.php");
     } 
?>