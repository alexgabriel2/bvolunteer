<?php 

require_once '../../dependencies/functions.php';
require_once '../../dependencies/db_connect.php';

if(isset($_POST['submit'])){

    $email=$_POST['email'];
    $password=$_POST['password'];

    $error=false;
    $erroremail=false;
    $errorpassword=false;

    if(empty($email)){
        $error=true;$erroremail=true;
        
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error=true;$erroremail=true;
       
    }
    if(empty($password)){
        $error=true;$errorpassword=true;   
    }
    if($erroremail==true || $errorpassword ==true){
        echo("Make sure all fields are filled correctly.");
    }
    if($error==false){
        if(login($conn,$email,$password)==2){
            $erroremail=true;
            echo("We didn't find an account linked to this email address.");
        }
        if(login($conn,$email,$password)==3){
            $errorpassword=true;
            echo("Wrong password.");
        }

    }
}
?>
<script>

    $("#mail, #psw").removeClass("inputerror");

    var email = "<?php echo $erroremail; ?>";
    var password = "<?php echo $errorpassword; ?>";
    var error=false;

    if(email==true){
        error=true;
        $("#mail").addClass("inputerror");
    }
    if(password==true){
        error=true;
        $("#psw").addClass("inputerror");
    }
    if(error==false){
        
    }
   
</script>