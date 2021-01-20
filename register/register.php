<!DOCTYPE html>
<html>
    <head>
        <title>BVolunteer | Home</title>
        <link rel="icon" href="poze/icon.png">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="register.css">
    </head>
    <body>
        <div class="register">
            
            <div class="user">
                <h3>Registering as a volunteer</h3>
                <form action="../dependencies/prepareregister.php" method="POST">
                Nume 
                <p>
                <input type="text" id="nume_register" name="nume" placeholder="nume" require>
                Prenume 
                <p>
                <input type="text" id="prenume_register" name="prenume" placeholder="prenume" require>
                Email <p>
                <input type="email" id="email_register" name="email" placeholder="your@email.com" require>
                Password
                <p>
                <input type="password" id="password_register" name="password" placeholder="your password" require>
                Repeat password                <p>
                <input type="password" id="repeat_password_register" name="password" placeholder="your password" require>

                <input type="submit" name="submit" value="Register">
                </p>
                </form>
            </div>
            <div class="org">
            </div>
        </div>
        <script>

        </script>
    </body>
</html>