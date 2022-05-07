<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Yash Login Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

    <style>
               
               body{
                   height: 100%;
                   display: flexbox;
                   justify-content: center;
                   align-items: center;
                   padding: 10px;
                   background-color:#00FF00;
                   }
               .modal-content {
                                   margin: 5% auto 15% auto;
                                   width:80%;
                                   border:8px solid rgb(0, 0, 0);
                               }
               .font{
                       font-weight:bold;
                    }
               .bg{
                  
                   background: linear-gradient(135deg, #1e20aa, #f3427d);
                   color:#1d1a1a;
                   }
          
              
               .sr{
                   background-color:#000707;
                   text-align: center;
                   color: rgb(20, 203, 216);
                   }
                  
               .tr{
              
                   text-align: center;
                   }
               table tr#ROW1  {background-color:rgb(23, 167, 167);
                   background: linear-gradient(135deg, #06c6e7, #557fda);
                               }

               .backtosite{
                   color: whitesmoke;
                   font-size: large;
               } 
               
          
              
       </style>
    </head>
    <body>
    <?php 
    if(isset($_SESSION['message']) && $_SESSION['message']){
        echo '<p>'.$_SESSION['message'].'<p>';
        unset($_SESSION['message']);
    }
    ?>
    <form method="POST" action="file2.php" enctype="multipart/form-data">
        <input type="file" id="file-upload" name="uploadedfile">
        <input type="submit" name="uploadbtn" value="Upload">
    </form>
    </body>
</html>
