<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login-form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="main">

        <div class="container">
            <div class="signup-content">
             <form action="validateuser.php" method="post">
                    <h2>Login Page</h2>
                   
                    <p class="desc">Please Enter your Details As Per Given In  <span>“Registration form”</span></p>
                    <div class="form-group">
                        <input type="text" class="form-input" name="username" id="name" placeholder="username"/>
                        <span toggle="#username" class="zmdi zmdi-eye field-icon toggle-password"></span>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" name="password" id="password" placeholder="Password"/>
                        <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="Remember Me" id="Remember Me" class="agree-term" />
                        <label for="agree-term" class="label-agree-term"><span><span></span></span>Remember Me <a href="#" class="term-service"></a></label>
                    </div>
                    <div class="form-group">
                        <h4>Have You Already Registered ?</h4>
                        <input type="submit" name="submit" id="submit" class="form-submit submit" value="Submit"/>
                        <a href="registration.html.html" class="submit-link submit">Register</a>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>