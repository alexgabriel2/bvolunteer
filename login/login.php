<!DOCTYPE html>
<html>
    <head>
        <title>HiVolunteer | Home</title>
        <link rel="icon" href="poze/icon.png">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="login.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <noscript><meta http-equiv="refresh" content="0;url=http://nojs.hivolunteer.com"></noscript>    
    </head>
    <body>
        <script>
            $(document).ready(function(){
                $("form").submit(function(event){
                    event.preventDefault();
                    var email=$("#mail").val();
                    var password=$("#psw").val();
                    var submit=$("#login").val();
                    $(".response").load("login/login.php", {
                        email:email,
                        password:password,
                        submit:submit
                    });
                });
            });
        </script>
        <div class="page">
            <div class="logo">
                <img src="../poze/LOGO.png">
            </div>
            <div class="login">
                <form action="login/login.php" method="post">
                    <input type="text" placeholder="Email" name="email" id="mail">
                    <input type="password" placeholder="Password" name="password" id="psw">
                    <div class="logbtn">
                    <h3 class="response"></h3>
                    <input type="submit" value="Login" id="login">
                    </div>
                    You dont have an account?<a href="../register/register.php">Register now!</a><br>
                    <a href="#">Forgot Password?</a>
                   
                </form>
            </div>
            <div class="buttom">

            </div>
        </div>
    </body>
</html>