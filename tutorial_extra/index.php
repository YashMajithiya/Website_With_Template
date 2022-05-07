<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Simple Interest</title>
    <style>
              body{
                
                height: 750px;
                background-image: linear-gradient(#FF0000,#000000);
                }
                .font{
                        font-weight:bold;
                        
                     }
                   
                     .sr{
                    background-color:#C0C0C0;
                    text-align: center;
               
                    }
                    text-align: center;
                    }
                
                    </style>

</head>
<body>
    <div class="container">
        <form action="result.php" method="GET">
             <div class="form-group mt-3">
             <label for="name"> <h5 style="color:cyan;">Name:-</h5> </label>
            <input type="text" name="name" id="name"  class="font sr">
            </div>

            <div class="form-group mt-3">
             <label for="dt"><h5 style="color:cyan;">Birth Date:-</h5></label>
             <input type="date"  name="dt" id="dt" class="font sr">
            </div>

            <div class="form-group mt-3">
             <label for="age"> <h5 style="color:cyan;">Age:-</h5></label>
             <input type="number"  name="age" id="age" class="font sr">
            </div>
            <div class="form-group mt-3">
             <label for="percent"> <h5 style="color:cyan;">12 Percentage:-</h5></label>
             <input type="text"  name="percent" id="percent" class="font sr">
            </div>
            <div class="form-group mt-3">
             <label for="country"><h5 style="color:cyan;">Country:-</h5></label> 
             <input type="text"  name="country" id="country" class="font sr">
            </div>
              
            <div class="form-group mt-3">
             <label for="city"><h5 style="color:cyan;">City:-</h5></label>
             <input type="text" name="city" id="city" class="font sr">
            </div>

            <div class="form-group mt-3">
             <label for="state"><h5 style="color:cyan;">State:-</h5></label>
             <input type="text"  name="state" id="state" class="font sr">
            </div>
            <div class="form-group mt-3">
             <label for="pincode"><h5 style="color:cyan;">Pincode:-</h5></label>
             <input type="text"  name="pincode" id="pincode" class="font sr">
            </div>
            <div class="form-group mt-3">
             <label for="address"><h5 style="color:cyan;"> Address:-</h5></label>
             <input type="text"  name="address" id="address" class="font sr">
            </div>
            <div class="form-group mt-3">
             <label for="college"><h5 style="color:cyan;">Colleges:-</h5></label>
             <input type="text"  name="college" id="college" class="font sr">
            </div>
            <div class="form-group mt-3">
             <label for="scholarship"><h5 style="color:cyan;">Which Scholarship:--</h5></label>
             <input type="text"  name="scholarship" id="scholarship" class="font sr">
            </div>
            <div class="form-group mt-3">
             <label for="mno"><h5 style="color:cyan;">Mobile Number:-</h5></label>
             <input type="text"  name="mno" id="mno" class="font sr">
            </div>
            <div class="form-group mt-3">
             <label for="pf"><h5 style="color:cyan;">Profile Photo:-</h5></label>
             <input type="file"  name="pf" id="pf" class="font sr">
            </div>

            <div class="form-group mt-3">
             <label for="un"><h5 style="color:cyan;">Urgently Mobile Number:-</h5></label>
             <input type="text"  name="un" id="un" class="font sr">
            </div>
               <br>
               
            <div class="form-group mt-3">
              <input type="submit"class="btn btn-warning">
            </div>
        </form>
    </div>
</body>
</html>