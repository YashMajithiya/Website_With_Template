<?php
    include("include/connection.php");

    $qry = "select * from tbl_machine";
    $res = $db->query($qry);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutotrial12</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.6.0.min.js"></script>

    <style>
               
               body{

                   background-color:#FAAFBA;
                   }
                   .table-hover{
                    color: #DFFF00;
                    font-weight:bold;
                    margin: 5% auto 10% auto;
                                    width:100%;
                                    border:8px solid #800080;
                                }
                                
                }       

                </style>  
</head>

    <body>

    <div class="container">
    <h1 style="font-weight: bold;"> Data</h1>
  
        <a href="formdata.php" class="btn btn-outline-primary w-100">Add Record </a>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col"><h1 style="font-weight: bold;">Id</h1></th>
                    <th scope="col"><h1 style="font-weight: bold;">Machine Name</h1></th>
                    <th scope="col"><h1 style="font-weight: bold;">Description</h1></th>
                    <th scope="col"><h1 style="font-weight: bold;" >Edit/Delete</h1></th>

                    
                </tr>
            </thead>
            <tbody>
            <?php
    $qry="select id,machine_name,description from tbl_machine where is_delete=0 order by id desc";
    $res=$db->query($qry);

    if($res->num_rows>0){
        while ($row=$res->fetch_assoc())
        {
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>" .$row['machine_name']."</td>";
            echo "<td>" .$row['description']."</td>";
            echo '<td>
            <a href="form.php?id='.$row['id'].'" class="btn btn-outline-info w-50">Edit</button></a>

            <a href="delete.php?id='.$row['id'].'" class="btn btn-outline-danger w-50">Delete</button></a></td>';
            echo "</tr>";

            
        }
    }
?>
        </tbody>
        </table>
    </div>
</body>
</html>