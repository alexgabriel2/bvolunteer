<!DOCTYPE html>
<html>
    <head>
        <title>BVolunteer | Home</title>
        <link rel="icon" href="poze/icon.png">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="register.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $("volunteerreg").submit(function(event){
                    event.preventDefault();
                    var nume=$("nume").val();
                    var prenume=$("prenume").val();
                    var email=$("email").val();
                    var password=$("password").val();
                    var confirmpassword=$("confirmpassword").val();
                    $(".response").load("preregister.php",{
                        nume:nume,
                        prenume:prenume,
                        email:email,
                        password:password,
                        confirmpassword:confirmpassword,
                        submit:submit
                    });
                });
            });
        </script>
    </head>
    <body>
        <div class="register">
            
            <div class="user">
                <h3>Registering as a volunteer</h3>
                <form action="preregister.php" method="POST" id="volunteerreg">
                Nume 
                <input type="text" id="nume" name="nume" placeholder="nume" require>
                Prenume 
                <input type="text" id="prenume" name="prenume" placeholder="prenume" require>
                Email
                <input type="email" id="email" name="email" placeholder="your@email.com" require>
                Password
                <input type="password" id="password" name="password" placeholder="your password" require>
                Repeat password
                <input type="password" id="confirmpassword" name="confirmpassword" placeholder="your password" require>
                <input type="submit" id="submit" name="submit" value="Register">
                <p id="response"></p>
                </form>
            </div>
            <div class="org">
            </div>
        </div>
    </body>
</html>