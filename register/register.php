<!DOCTYPE html>
<html>
    <head>
        <title>BVolunteer | Home</title>
        <link rel="icon" href="poze/icon.png">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="register.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body>
    <script>
            $(document).ready(function(){
                $("form").submit(function(event){
                    event.preventDefault();
                    var nume=$("#renume").val();
                    var prenume=$("#reprenume").val();
                    var email=$("#reemail").val();
                    var password=$("#repassword").val();
                    var confirmpassword=$("#reconfirmpassword").val();
                    var submit=$("#resubmit").val();
                    $(".response").load("preregisteruser.php", {
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
        <div class = up_part>
            <div class = left_side>

            
            </div>
            <div class = right_side>


            </div>
        </div>
        <div class="register">
            
            <div class="user">
                <h3>Registering as a volunteer</h3>
                <form action="preregisteruser.php" method="POST">
                Nume 
                <input type="text" id="renume" name="nume" placeholder="nume" require>
                Prenume 
                <input type="text" id="reprenume" name="prenume" placeholder="prenume" require>
                Email
                <input type="email" id="reemail" name="email" placeholder="your@email.com" require>
                Password
                <input type="password" id="repassword" name="password" placeholder="your password" require>
                Repeat password
                <input type="password" id="reconfirmpassword" name="confirmpassword" placeholder="your password" require>
                <button type="submit" id="resubmit" name="submit" Register>Register</button>
                <p class="response"></p>
                </form>
            </div>
            <div class="org">
            </div>
        </div>
    </body>
</html>