<?php 
session_start();
if(!isset($_SESSION['uemail']))
{
//echo $_SESSION['uemail']; 
header('Location:login.php');
}
include("connection.php");
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
                <a class="nav-link" href="logout.php">logout</a>
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
                <h2>Crud Operation</h2>
            </div>
            <div class="col-lg-2">
            <a href="insert.php" class="btn btn-success">Insert</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
            </div>
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">full name</th>
                <th scope="col">first name</th>
                <th scope="col">last name</th>
                <th scope="col">email</th>
                <th scope="col">gender</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                $sql="select *from members";
                $res=$db->query($sql);
                if($res->num_rows>0)
                {
                    while($row=$res->fetch_assoc())
                    {
            ?>
                <tr>
                <th scope="row"><?php echo $row["fullname"]?></th>
                <td><?php echo $row["firstname"]?></td>
                <td><?php echo $row["lastname"]?></td>
                <td><?php echo $row["email"]?></td>
                <td><?php echo $row["gender"]?></td>
                <td>
                <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-warning">Edit</a>
                <a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-danger">Delete</a>
                </td>
                </tr>
                <?php
                }}
                ?>
            </tbody>
            </table>
    </div>
</body>
</html>