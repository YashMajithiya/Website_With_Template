<?php 
include("connection.php");
$mem=$_GET["id"];
$sql="select *from members where id=$mem";
$mem=$db->query($sql);
$row=$mem->fetch_array();

if($_SERVER['REQUEST_METHOD']=="POST")
{
if(empty($_POST["fullname"]))
{
    $fullnm="full name is required";
}
if(empty($_POST["firstname"]))
{
    $firstnm="first name is required";
}
if(empty($_POST["lastname"]))
{
    $lastnm="last name is required";
}
if(empty($_POST["email"]))
{
    $email="email field is required";
}
if(empty($_POST["password"]))
{
    $pass="password field is required";
}
if(empty($_POST["contact"]))
{
    $contact="contact field is required";
    
}
if(empty($_POST["date"]))
{
    $date="birth date field is required";
}
if(empty($_POST["passno"]))
{
    $passno= "passno field is required"; 
}
if(empty($_POST["register"]))
{
    $register= "register field is required"; 
}
if(empty($_POST["status"]))
{
    $status= "status field is required"; 
}
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                <a class="nav-link active" href="#">Home
                    <span class="visually-hidden">(current)</span>
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-sm-2" type="text" placeholder="Search">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
            </form>
            </div>
        </div>
        </nav></br>
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <h2>Member Form</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
            <form action=""  method="post"  enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputName" class="form-label mt-4">Full Name</label>
                    <input type="text" class="form-control" name="fullname" id="fullname"  placeholder="Enter FullName" value="<?php echo $row['fullname'];?>" >
                    <span><?php if(isset($fullnm)) {echo $fullnm;}?></span>                
                </div>
                <div class="form-group">
                    <label for="exampleInputName" class="form-label mt-4">First Name</label>
                    <input type="text" class="form-control" name="firstname" 
                    id="firstname"  placeholder="Enter FirstName" value="<?php echo $row['firstname']?>">
                    <span class = "error"><?php if(isset($firstnm)){echo $firstnm;}?></span>                
                </div>
                <div class="form-group">
                    <label for="exampleInputName" class="form-label mt-4">Last Name</label>
                    <input type="text" class="form-control" name="lastname" id="lastname"  placeholder="Enter LastName" value="<?php echo $row['lastname']?>"  >
                    <span class = "error"><?php if(isset($lastnm)){echo $lastnm;}?></span>                
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label mt-4">Email address</label>
                    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email" value="<?php echo $row['email']?>">   
                    <span class = "error"><?php if(isset($email)){echo $email;}?></span>                
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1" class="form-label mt-4">Password</label>
                    <input type="password" class="form-control" name= "password" id="password" placeholder="Password" value="<?php echo $row['password']?>">
                    <span class = "error"><?php if(isset($pass)){echo $pass;}?></span>                
                </div>
                <div class="form-group">
                    <label for="exampleInputContact" class="form-label mt-4">Contact</label>
                    <input type="number" class="form-control" name="contact" id=contact"  placeholder="Enter Contact" value="<?php echo $row['contact']?>">
                    <span class = "error"><?php if(isset($contact)){echo $contact;}?></span>                
                </div>
                <div class="form-group">
                    <label for="exampleInputName" class="form-label mt-4">BirthDate</label>
                    <input type="text" class="form-control" name="date" id="date"  placeholder="Enter Birthdate" value="<?php echo $row['birthday']?>">
                    <span class = "error"><?php if(isset($date)){echo $date;}?></span>                
                </div>
                <label for="exampleInputName" class="form-label mt-4">Gender</label>
                
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="male" checked="">
                    Male
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="female">
                    Female
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="other">
                    Other
                    </label>
                </div>
                <div class="form-group">
                    <label for="exampleInputContact" class="form-label mt-4">Pass no</label>
                    <input type="text" class="form-control" name="passno" id="passno"  placeholder="Enter Passno" value="<?php echo $row['passno']?>">
                    <span class = "error"><?php if(isset($passno)){echo $passno;}?></span>                

                </div>
                <div class="form-group">
                    <label for="exampleInputContact" class="form-label mt-4">Register By</label>
                    <input type="text" class="form-control" name="register" id="register"  placeholder="Enter Contact" value="<?php echo $row['registerby']?>">
                    <span class = "error"><?php if(isset($register)){echo $register;}?></span>                

                </div>
                <div class="form-group">
                    <label for="exampleInputContact" class="form-label mt-4">Status</label>
                    <input type="text" class="form-control" name="status" id="status"  placeholder="Enter Status" value="<?php echo $row['status']?>" >
                    <span class = "error"><?php if(isset($status)){echo $status;}?></span>                
                </div>
                <div class="form-group">
                    <label for="formFile" class="form-label mt-4">Profile</label>
                    <input class="form-control" type="file"  name="image" id="image">
                     <img src="uploads/<?php echo $row['photo'];?>" alt="" width="200px">          
                     <input type="hidden" name="img" value="<?php echo $row['photo'] ?>">
                </div>
                <br>
                <button type="submit" class="btn btn-primary" name="sub">Submit</button>
            </form>
            </div>
        </div>
    </div>
    <script>
    $( document ).ready(function() {
    var x=$('#fullname').val();
    var first=$('#firstname').val();
    var last=$('#lastname').val();
    var email=$('#email').val();
    var pass=$('#pass').val();
    var contact=$('#contact').val();
    var date=$('#date').val();
    var passno=$('#passno').val();
    var register=$('#register').val();
    var status=$('#status').val();
    if (x == "") {
    alert("full Name must be filled out");
    return false;
    }
  if (first == "") {
    alert("first Name must be filled out");
    return false;
  }
  if (last == "") {
    alert("last Name must be filled out");
    return false;
  }
  if (email == "") {
    alert("email must be filled out");
    return false;
  }
  if (pass == "") {
    alert("password must be filled out");
    return false;
  }
  if (contact == "") {
    alert("contact must be filled out");
    return false;
  }
  if (passno == "") {
    alert("passno must be filled out");
    return false;
  }
  if (register == "") {
    alert("register must be filled out");
    return false;
  }
  if (status == "") {
    alert("status must be filled out");
    return false;
  }
});
</script>
</body>
</html>
<?php 
  if(isset($_POST["sub"]))
 {    
     $fullnm=$_POST["fullname"];
     $firstnm=$_POST["firstname"];
     $lastnm=$_POST["lastname"];
     $email=$_POST["email"];
     $pass=$_POST["password"];
     $contact=$_POST["contact"];
     $birth=$_POST["date"];
     $gender=$_POST["optionsRadios"];
     $passno=$_POST["passno"];
     $registerby=$_POST["register"];
     $status=$_POST["status"];
    
     if(isset($_FILES['image'])){
        $errors= array();
        $file_name = $_FILES['image']['name'];
        $file_size =$_FILES['image']['size'];
        $file_tmp =$_FILES['image']['tmp_name'];
        $file_type=$_FILES['image']['type'];
        //$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
        $extensions= array("jpeg","jpg","png");
        // if(in_array($file_ext,$extensions)=== false){
        //    $errors[]="extension not allowed, please choose a JPEG or PNG file.";
        // }
        if($file_size > 2097152){
           $errors[]='File size must be excately 2 MB';
        }
        if(empty($errors)==true){
           move_uploaded_file($file_tmp,"uploads/".$file_name);
           //echo "Success";
        }else{
           //print_r($errors);
        }
     }
     
    //  $sql="insert into members(fullname,firstname,lastname,email,password,contact,birthday,gender,passno,registerby,status,photo)values('$fullnm','$firstnm','$lastnm','$email','$pass',$contact,$birth,'$gender','$passno','$registerby','$status','$file_name')";
    //  $db->query($sql);
    //  if ($db->query($sql) === TRUE) {
    //     echo "New record created successfully";
    //   } else {
    //     echo "Error: " . $sql . "<br>" . $db->error;
    //   } 
    // $sql="update members set fullname='$fullnm',firstname='$firstnm',lastname='$lastnm',email='$email',password=$pass,contact=$contact,birthday=$birth,gender='$gender',passno=$passno,registerby='$registerby',status='$status',photo='$file_name' where id=$mem" ;
    if(empty($_POST["img"]))
    {      
    $sql="update members set fullname='".$_POST['fullname']."',firstname='".$_POST['firstname']."',lastname='".$_POST['lastname']."',email='".$_POST['email']."',password='".$_POST['password']."',contact='".$_POST['contact']."',birthday='".$_POST['date']."',gender='".$_POST['optionsRadios']."',passno='".$_POST['passno']."',registerby='".$_POST['register']."',status='".$_POST['status']."' where id= '".$_GET['id']."'";
    $db->query($sql);
    if ($db) {
        echo "Record updated successfully";
      } else {
        echo "Error updating record: " . $db->error;
      }
    }
    else{
        $sql="update members set fullname='".$_POST['fullname']."',firstname='".$_POST['firstname']."',lastname='".$_POST['lastname']."',email='".$_POST['email']."',password='".$_POST['password']."',contact='".$_POST['contact']."',birthday='".$_POST['date']."',gender='".$_POST['optionsRadios']."',passno='".$_POST['passno']."',registerby='".$_POST['register']."',status='".$_POST['status']."'        photo='$file_name' where id= '".$_GET['id']."'";
        $db->query($sql);
        if ($db) {
            echo "Record updated successfully";
          } else {
            echo "Error updating record: " . $db->error;
          }
    }
 }
?>