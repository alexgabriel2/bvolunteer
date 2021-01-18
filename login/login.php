<!DOCTYPE html>
<html>
    <head>
        <title>BVolunteer | Home</title>
        <link rel="icon" href="poze/icon.png">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="login.css">
    </head>
    <body>
        <div class="login">
            <form action="login.php" method="post">
                <label for="email_login">Email</label>
                <input type="email" id="email_login" name="email" placeholder="your@email.com" require>
                <label for="password_login">Password</label>
                <input type="password" id="password_login" name="password" placeholder="yourpassword" require>
                <input type="checkbox" id="autologin">Remember me!
                <input type="submit" value="Login" id="submit_button">
            </form>
            <a href="../register/register.php">You dont have an account?</a>
            
        </div>
    </body>
</html>