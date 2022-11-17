<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<!------ Include the above in your HEAD tag ---------->
<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->
            
            <!-- Icon -->
            <div class="fadeIn first">
                <img src="img/usericon.png" id="icon" alt="User Icon" class="user-icon-img"/>
            </div>
            
            <!-- Login Form -->
            <form action="form.php" method="POST">
                <input type="text" id="login" class="fadeIn second" name="email" placeholder="login">
                <input type="password" id="password" class="fadeIn third" name="senha" placeholder="password">
                <input type="submit" class="fadeIn fourth" name="Login">
            </form>
            
            <!-- Remind Passowrd -->
            <div id="formFooter">
                <a class="underlineHover" href="#">Forgot Password?</a>
            </div>
            
        </div>
    </div>
</body>

</html>