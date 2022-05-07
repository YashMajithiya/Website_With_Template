<?php
     session_start();
     if(isset($_SESSION['data']))
     {

         
     }else{
        header("location:login.php");
     }
?>
<html>
    <head>
        <title>Registerd Data</title>
       
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
        <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
         <script>
       $("document").ready(function(){
                $("a.delete").click(function(){
                    $(this).parents("tr").fadeOut();
;
                });
            });
        </script>
       
        <style>
               
                body{
                    height: 100%;
                    display: flexbox;
                    justify-content: center;
                    align-items: center;
                    padding: 10px;
                    background-color:#000000;
                    }
                .modal-content {
                                    margin: 5% auto 15% auto;
                                    width:80%;
                                    border: 10px solid rgb(230, 16, 16);
                                }
                .font{
                        font-weight:bold;
                     }
                .bg{
                   
                    background: linear-gradient(135deg, #dfe20d, #f3427d);
                    color:#1d1a1a;
                    }
           
               
                .sr{
                    background-color:#0d1416;
                    text-align: center;
                    color: rgb(20, 203, 216);
                    }
                   
                .tr{
               
                    text-align: center;
                    }
                table tr#ROW1  {background-color:rgb(23, 167, 167);
                    background: linear-gradient(135deg, #06c6e7, #8f9e08);
                                }
 
                .backtosite{
                    color: whitesmoke;
                    font-size: large;
                }                
               
        </style>
    </head>
    <div>
    <body>
        <table class="modal-content bg table table-condensed table-striped ">
            <tr  id="ROW1">
                <td colspan="8"><h3 style="font-weight: bold;">Registerd Data</h3></td>
 
                <td style="padding: 20px; text-align: center;"><a href="logout.php" class="btn btn-success w-25 ">Logout </a>
                <td style="padding: 20px; text-align: center;"><input type="submit" class="btn btn-success w-25" value="Add Record"></td>
                
            </tr>
            <tr class="font sr">
                <td>Sr. no</td>
                <td>Name</td>
                <td>Email</td>
                <td>Username</td>
                <td>Password</td>
                <td>Age</td>
                <td>City</td>
                <td>Country</td>
                <td>State</td>
                <td>Manage</td>
                
            </tr>
            <tr id="ROW1" class="tr">
                <td>1</td>
                <td>Devil Yash</td>
                <td>ynajithiy@rku.ac.in</td>
                <td>dy</td>
                <td>43563</td>
                <td>20</td>
                <td>Rajkot</td>
                <td>India</td>
                <td>Gujrat</td>
                <td><a href="#"><button type="button" class="btn btn-warning">Edit</button> </a>
                <a href="#" class="delete"><button type="button" class="btn btn-danger">Delete</button></a></td>
            </tr>
            <tr class="tr">
                <td>2</td>
                <td>Yash Majithiya</td>
                <td>yashmajithy0@gmail.com</td>
                <td>YM</td>
                <td>20</td>
                <td>8641874</td>
                <td>Keshod</td>
                <td>India</td>
                <td>Gujrat</td>
                <td><a href="#"><button type="button" class="btn btn-warning">Edit</button> </a>
                <a href="#" class="delete"><button type="button" class="btn btn-danger">Delete</button></a></td>
            </tr>
            <tr class="tr" id="ROW1">
                <td>3</td>
                <td>Krisha Pathak</td>
                <td>kpatak@rku.ac.in</td>
                <td>KP</td>
                <td>30</td>
                <td>8678965</td>
                <td>Rajkot</td>
                <td>India</td>
                <td>Gujrat</td>
                <td><a href="#"><button type="button" class="btn btn-warning">Edit</button> </a>
                <a href="#" class="delete"><button type="button" class="btn btn-danger">Delete</button></a></td>
            </tr>

            <tr class="tr">
                <td>4</td>
                <td>Chelsi tank</td>
                <td>ch905@rku.ac.in</td>
                <td>CT</td>
                <td>45</td>
                <td>76894783</td>
                <td>Junagadh</td>
                <td>India</td>
                <td>gujrat</td>
                <td><a href="#"><button type="button" class="btn btn-warning">Edit</button> </a>
                <a href="#" class="delete"><button type="button" class="btn btn-danger">Delete</button></a></td>
            </tr>
            <tr class="tr" id="ROW1">
                <td>5</td>
                <td>Om devil</td>
                <td>devil@rku.ac.in</td>
                <td>OD</td>
                <td>53</td>
                <td>6748343</td>
                <td>gondal</td>
                <td>India</td>
                <td>Gujrat</td>
                <td><a href="#"><button type="button" class="btn btn-warning">Edit</button> </a>
                <a href="#" class="delete"><button type="button" class="btn btn-danger">Delete</button></a></td>
            </tr>
           
        </table>
       
          <!--- <p class="backtosite"> <a href="../index.html#portfolio" class="backtosite" >Back to Website !!!</a></p> -->
   
        </div>
    </body>
</html>

