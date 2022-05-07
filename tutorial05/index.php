<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <title>Edit Month</title>
        <style> 
          body {
                background-color:#000000;
               }
</style>

</head>
<body>
<div class="container">
    <form action="result.php" method="GET">
        <div class="form-group mt-5" >
            <label for="monthno"><h1><p class="text-primary">Enter The Month Number</p></h1></label>
            <select name="monthno" id="monthno" class="form-control">
              <option value="" selected >0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
            </select>
            <div class="form-group mt-3">
            <input type="submit" id="btnSubmit" value="Submit" class="btn btn-primary" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $("#btnSubmit").click(function () {
            var monthno = $("#monthno");
            if (monthno.val() == "") {    
                alert("Please Choose A Correct Month");
                return false;
            }
            return true;
        });
    });
</script>
</div>    
</form>
</body>
</html>