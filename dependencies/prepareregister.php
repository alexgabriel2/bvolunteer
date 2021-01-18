<?php

include_once 'db_connect.php';
include_once 'registerfunc.php';

if(isset($_POST['nume_register'],$_POST['prenume_register'],$_POST['email_register'],$_POST['password_register'])){

    $nume=mysqli_real_escape_string($conn,trim($_POST['nume_register']));
    $prenume=mysqli_real_escape_string($conn,trim($_POST['prenume_register']));
    $email=mysqli_real_escape_string($conn,trim($_POST['email_register']));
    $password=mysqli_real_escape_string($conn,trim($_POST['password_register']));

}