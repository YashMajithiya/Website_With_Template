<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Simple Interest</title>
    <style>
              body{
                
                height: 550px;
                background-image: linear-gradient(#00FFFF,#0041C2);
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
             <label for="principle"> principle:- </label>
            <input type="text" name="principle" id="principle"  class="font sr">
            </div>
              
            <div class="form-group mt-3">
             <label for="roi">Rate Of Intrest:-</label>
             <input type="text" name="roi" id="roi" class="font sr">
            </div>

            <div class="form-group mt-3">
             <label for="noy">Number Of Years:-</label>
             <input type="text"  name="noy" id="noy" class="font sr">
            </div>

            <div class="form-group mt-3">
              <input type="submit"class="btn btn-warning">
            </div>
        </form>
    </div>
</body>
</html>