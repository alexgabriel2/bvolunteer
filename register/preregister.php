<?php 

require_once 'db_connect.php';
require_once 'functions.php';

if (isset($_POST['submit'])){

    $nume=$_POST['nume'];
    $prenume=$_POST['prenume'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $confirmpassword=$_POST['confirmpassword'];

    $error=false;
    $empty_nume= false;
    $invalid_nume= false;
    $empty_prenume= false;
    $invalid_prenume= false;
    $empty_email= false;
    $invalid_email= false;
    $email_exist= false;
    $empty_password= false;
    $nrcha_password= false;
    $number_password= false;
    $capital_password= false;
    $lowercase_password= false;
    $special_password= false;
    $empty_confirmpassword= false;
    $passworddiff= false;

    if(empty($nume)){
        $error=true; $empty_nume=true;
        echo "test";
    }
    elseif(validnume($nume)){
        $error=true; $invalid_nume=true;
        echo "test2";
    }
    if(empty($prenume)){
        $error=true; $empty_prenume=true;
        echo "test3";
    }
    elseif(validprenume($prenume)){
        $error=true; $invalid_prenume=true;
    }
    if(empty($email)){
        $error=true; $empty_email=true;      
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error=true; $invalid_email=true; 
    }
    elseif(emailexist($conn, $email)==1){
        $error=true; $email_exist=true;
    }
    if(empty($password)){
        $error=true; $empty_password=true;     
    }
    if(validpassword($password)==1){
        $error=true; $nrcha_password=true;       
    }
    if(validpassword($password)==2){
        $error=true; $number_password=true;
    }
    if(validpassword($password)==3){
        $error=true; $lowercase_password=true;
    }
    if(validpassword($password)==4){
        $error=true; $capital_password=true;
    }
    if(validpassword($password)==5){
        $error=true; $special_password=true;
    } 
    if(empty($confirmpassword)){
        $error=true; $empty_confirmpassword= true;
    }
    if($password !==$confirmpassword){
        $error=true; $passworddiff=true;
        echo "parola";
    }
    #execute actual code
    if($error==false){
        register($conn, $nume, $prenume, $email, $password);
    }
    
}
else {
    header("Location: register.php");
}
?>
<script>
    var emptyNume="<?php echo $empty_nume; ?>";
    var invalidNume="<?php echo $invalid_nume; ?>";
    var emptyPrenume="<?php echo $empty_prenume; ?>";
    var invalidPrenume="<?php echo $invalid_prenume; ?>";
    var emptyEmail="<?php echo $empty_email; ?>";
    var invalidEmail="<?php echo $invalid_email; ?>";
    var existEmail="<?php echo $email_exist; ?>";
    var emptyPassword="<?php echo $empty_password; ?>";
    var emptyConfirmPassword="<?php echo $empty_confirmpassword; ?>";
    var nrchaPassword="<?php echo $nrcha_password; ?>";
    var numberPassword="<?php echo $number_password; ?>";
    var capitalPassword="<?php echo $capital_password; ?>";
    var lowecasePassword="<?php echo $lowercase_password; ?>";
    var specialPassword="<?php echo $special_password; ?>";
    var diffPassword="<?php echo $passworddiff; ?>";
    var error=false;
    if(emptyNume == true){
        error=true;
    }
    else if(invalidNume==true){
        error=true;
    }
    if(emptyPrenume==true){
        error=true;
    }
    if(emptyPrenume==false && invalidPrenume==true){
        error=true;
    }
    if(emptyEmail==true){
        error=true;
    }
    if(emptyEmail==false && invalidEmail==true){
        error=true;
    }
    if(emptyEmail==false && invalidEmail==false && existEmail==true){
        error=true;
    }
    if(emptyPassword==true){
        error=true;
    }
    if(emptyPassword==false && nrchaPassword==true){
        error=true;
    }
    if(emptyPassword==false && numberPassword==true){
        error=true;
    }
    if(emptyPassword==false && capitalPassword==true){
        error=true;
    }
    if(emptyPassword==false && lowecasePassword==true){
        error=true;
    }
    if(emptyPassword==false && specialPassword==true){
        error=true;
    }
    if(emptyConfirmPassword==true){
        error=true;
    }
    if(emptyPassword==false && emptyConfirmPassword==false && diffPassword==true){
        error=true;
    }
    if(error==false){
        
    }
</script>