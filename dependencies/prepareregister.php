<?php

include_once 'db_connect.php';
include_once 'registerfunc.php';

if(isset($_POST["submit"])){
    
    $nume=$_POST['nume_register'];
    $prenume=$_POST['prenume_register'];
    $email=$_POST['email_register'];
    $password=$_POST['password_register'];
    $conpassword=$_POST['repeat_password_register'];
    
}
else{
 header("Location:../register/register.php");
}

