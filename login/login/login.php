<?php 
require_once '../dependencies/db_connect.php';
require_once '../dependencies/functions.php';

if(isset($_POST['submit'])){

    $email=$_POST['email'];
    $password=$_post['password'];

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
        login($conn,$email,$password);
    }
}
