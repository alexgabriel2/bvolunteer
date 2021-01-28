<?php

function validnume($nume){
    return preg_match("/[^a-zA-Z]+/", $nume);
}
function validprenume($prenume){
    return preg_match("/[^a-zA-Z]+/", $prenume);
}    
function validpassword($password) {
    if(strlen($password)<=7){
        return "1";
    }
    elseif(!preg_match("#[0-9]+#",$password)){
        return "2";
    }
    elseif(!preg_match("#[a-z]+#",$password)){
        return "3";
    }
    elseif(!preg_match("#[A-Z]+#",$password)){
        return "4";
    }
    elseif(!preg_match("#[\W]+#",$password)){
        return "5";
    }
    else{
        return "0";
    }
}
function emailexist($conn, $email){
    $sqlusers="SELECT * FROM users WHERE email=?;";
    #$sqlorg ="SELECT * FROM org WHERE email=?;";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sqlusers)){
        return "1";
        #ceva eroare
    }
    mysqli_stmt_bind_param($stmt,"s",$email);
    mysqli_stmt_execute($stmt);
    $resultuser=mysqli_stmt_get_result($stmt);
    if(mysqli_fetch_assoc($resultuser)){
        return "2";
        #exista
    }
    mysqli_stmt_close($stmt);
}
function register($conn, $nume, $prenume, $email, $password){

    $sql = "INSERT INTO users (nume, prenume, email, password, verified, regkey)
     VALUE (?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    $salt=0;
    $verified=0;
    $regkey=0;
    $options = [
        'cost' => 12,
    ];
    #todo generete regkey cum asta e o intrebare buna
    $hashedpsw=password_hash($password,PASSWORD_BCRYPT, $options);
    mysqli_stmt_bind_param($stmt, "ssssss", $nume, $prenume, $email, $hashedpsw, $verified, $regkey);
    mysqli_stmt_execute($stmt);
    echo"nu";

}