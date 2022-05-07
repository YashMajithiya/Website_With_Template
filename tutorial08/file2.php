<?php
session_start();
$message='';
if(isset($_POST['uploadbtn']) && $_POST['uploadbtn']=='Upload')
{
    if(isset($_FILES['uploadedfile']) && $_FILES['uploadedfile']['error']== UPLOAD_ERR_OK)
    {
       $fileTmPath = $_FILES['uploadedfile']['tmp_name'];
       $fileName = $_FILES['uploadedfile']['name'];
       $fileSize = $_FILES['uploadedfile']['size'];
       $fileType= $_FILES['uploadedfile']['type'];
       $fileNameCmps = explode('.',$fileName);
       $fileExtension = strtolower(end($fileNameCmps));
       
       $newFileName = md5(time().$fileName).'.'.$fileExtension;

       $extensionlist = array('jpg','gif','svg','png');
       if(in_array($fileExtension,$extensionlist))
       {
           $uploaddir = "./uploads/";
           $des_path = $uploaddir.$newFileName;
     
           if(move_uploaded_file($fileTmPath,$des_path)){
              ?><h1><?php $message='file uploaded sucessfully';?> </h1> <?php
           }
           else{
              ?><h1> <?php $message='there is problem in another uploading file';?> </h1> <?php
           }
       }
    }
    else{
        $message='allowed file extension are jpg,gif,svg,png';
    }
}
else{
    $message = 'There is more error in file upload';
}
$_SESSION['message']=$message;
header("location:index.php");
?>