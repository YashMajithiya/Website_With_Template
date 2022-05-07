<?php include "connection.php";
session_start();
if(isset($_SESSION["uemail"]))
{
  header("Location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="content mt-3">
            <form action="" method="post">
            <h2>Login</h2>
            <div class="form-group">
                <label for="exampleInputEmail1" class="form-label mt-4">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1" class="form-label mt-4">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
            </div><br>
            <input type="submit" value="Login" class="btn btn-primary" name="login">
        </form>
        </div>
    </div>
</body>
</html>
<?php 
if(isset($_POST['login']))
{
		  //new  
		  $email=$_POST['email'];
	      $_SESSION['uemail'] = $email; 
          $pass=$_POST['password'];
		  $sql="SELECT *from user where username='$email' and password='$pass'";
          $res=$db->query($sql);
		  $result=mysqli_fetch_array($res);
		  if($result==true)
          {
            if(isset($_SESSION["uemail"]))
            {
              header("Location:index.php");
            }
            else{
                header("location:login.php");
              }
    
         }
			//   header('Location:index.php');
			//   exit();
}
        else
          {
              echo "username and password is not correct";
          }

?>  