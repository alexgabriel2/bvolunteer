<?php 

require_once '../../register/functions.php';
require_once '../../dependencies/db_connect.php';

if(isset($_POST['submit'])){

    $email=$_POST['email'];
    $password=$_POST['password'];

    $error=false;
    $emptyemail=false;
    $invalidemail=false;
    $emptypassword=false;

    if(empty($email)){
        $error=true;$emptyemail=true;
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error=true;$invalidemail=true;
    }
    if(empty($password)){
        $error=true;$emptypassword=true;
    }
    if($error==false){
        if(login($conn,$email,$password)==1){

        }
        if(login($conn,$email,$password)==2){
            
        }
    }
}
