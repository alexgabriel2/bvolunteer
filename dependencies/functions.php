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

    $sqlusers="SELECT email FROM users WHERE email=?;";
    $sqlorg ="SELECT email FROM org WHERE email=?;";

    $stmt=mysqli_stmt_init($conn);
    $stmt2=mysqli_stmt_init($conn);

    mysqli_stmt_prepare($stmt,$sqlusers);
    mysqli_stmt_prepare($stmt2,$sqlorg);

    mysqli_stmt_bind_param($stmt,"s",$email);
    mysqli_stmt_bind_param($stmt2,"s",$email);

    mysqli_stmt_execute($stmt);
    mysqli_stmt_execute($stmt2);

    $resultuser=mysqli_stmt_get_result($stmt);
    $resultorgr=mysqli_stmt_get_result($stmt2);

    if(mysqli_fetch_assoc($resultuser) || mysqli_fetch_assoc($resultorgr)){
        return "1";
        #exista
    }

    mysqli_stmt_close($stmt);
    mysqli_stmt_close($stmt2);

}

function registeruser($conn, $nume, $prenume, $email, $password){

    $sql = "INSERT INTO users (nume, prenume, email, password, verified, regkey, ipreg, countryreg,cityreg,regionreg) VALUE (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $sqluser = "INSERT INTO logusr (email, password, user) VALUE (?, ?, ?);";

    $stmt = mysqli_stmt_init($conn);
    $stmt2 = mysqli_stmt_init($conn);

    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_prepare($stmt2, $sqluser);

    $verified=0;
    $key=$nume.time().$prenume;
    $user=true;

    $ip = $_SERVER['REMOTE_ADDR'];
    $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}"));
	$country = $details->country;
    $city= $details->city;
    $region=$details->region;
    
    $options = [
        'cost' => 12,
    ];

    $verifykey=hash('sha256',$key);
    $hashedpsw=password_hash($password,PASSWORD_BCRYPT, $options);

    mysqli_stmt_bind_param($stmt, "ssssssssss", $nume, $prenume, $email, $hashedpsw, $verified, $verifykey, $ip, $country, $city, $region);
    mysqli_stmt_bind_param($stmt2, "sss", $email, $hashedpsw, $user);

    mysqli_stmt_execute($stmt);
    mysqli_stmt_execute($stmt2);

    $usr="volutar";
    $to=$email;
    $subject ="Email Verification";
    $message ="<a href='http://localhost/bvolunteer/account/verify.php?verifykey=$verifykey&is=$usr'>Verify your account</a>";
    $header = "From: cloudgreen2020@gmail.com \r\n";
    $header .= "MIME-Version: 1.0"."\r\n";
    $header .= "Content-type:text/html;charset=UTF-8"."\r\n";

    mail($to,$subject,$message,$header);

    mysqli_stmt_close($stmt);
    mysqli_stmt_close($stmt2);

}

function registerorg($conn, $nume, $prenume, $email, $password){

    $sql = "INSERT INTO org (nume, prenume, email, password, verified, regkey, ipreg, countryreg, cityreg, regionreg) VALUE (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $sqluser = "INSERT INTO logusr (email, password, user) VALUE (?, ?, ?);";

    $stmt = mysqli_stmt_init($conn);
    $stmt2 = mysqli_stmt_init($conn);

    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_prepare($stmt2, $sqluser);

    $verified=0;
    $key=$nume.time().$prenume;

    $user=false;

    $ip = $_SERVER['REMOTE_ADDR'];
    $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}"));
	$country = $details->country;
    $city= $details->city;
    $region=$details->region;

    $options = [
        'cost' => 12,
    ];

    $verifykey=hash('sha256',$key);
    $hashedpsw=password_hash($password, PASSWORD_BCRYPT, $options);

    mysqli_stmt_bind_param($stmt, "ssssssssss", $nume, $prenume, $email, $hashedpsw, $verified, $verifykey, $ip, $country, $city, $region);
    mysqli_stmt_bind_param($stmt2, "sss", $email, $hashedpsw, $user);

    mysqli_stmt_execute($stmt);
    mysqli_stmt_execute($stmt2);

    $usr="org";
    $to=$email;
    $subject ="Email Verification";
    $message ="<a href='http://localhost/bvolunteer/account/verify.php?verifykey=$verifykey&is=$usr'>Verify your account</a>";
    $header = "From: cloudgreen2020@gmail.com \r\n";
    $header .= "MIME-Version: 1.0"."\r\n";
    $header .= "Content-type:text/html;charset=UTF-8"."\r\n";

    mail($to,$subject,$message,$header);

    mysqli_stmt_close($stmt);
    mysqli_stmt_close($stmt2);

}
function login($conn,$email,$password){

    $sqllogin="SELECT email,password FROM logusr WHERE email=?;";

    $stmt=mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt,$sqllogin);

    mysqli_stmt_bind_param($stmt,"s",$email);
    mysqli_stmt_execute($stmt);

    $result=mysqli_stmt_get_result($stmt);
    $fetreuslt=mysqli_fetch_assoc($result);

    if($fetreuslt){
        $hash=$fetreuslt['password'];
        if(password_verify($password,$hash)){
            return "1";
        }
        else{
           return "2";
        }
    }
    else{
        return "2";
    }

    mysqli_stmt_close($stmt);

}