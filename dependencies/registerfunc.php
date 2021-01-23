<?php

function isValidnume($nume) {
    return preg_match("/[^a-zA-Z]+/", $nume);
}
function isValidprenume($prenume) {
    return preg_match("/[^a-zA-Z]+/", $prenume);
}
function emailexist($conn,$email){
    $sql="SELECT * FROM users WHERE email=?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        //error code
        exit();
    }
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $resultdata=$stmt->get_result();
    if($row = mysqli_fetch_assoc($resultdata)){
        return $row;
    }
    else{
        return false;
    }
    mysqli_stmt_close($stmt);
}
function register($nume,$prenume,$email,$password,$conpassword,$conn){
    $error=false;
    //pls help me
    if(isValidnume($nume)==1 && empty($nume)){
        $error=true;
        //error code
    }
    if(isValidprenume($prenume)==1 && empty($prenume)){
        $error=true;
        //error code
    }
    if($password!==$conpassword){
        $error=true;
        //error code
    }
    if(filter_var($email,FILTER_VALIDATE_EMAIL)){
        $error=true;
        //error code
    }

    if($error==false){
        $sql="INSERT INTO users(nume,prenume,email,password,salt) 
        VALUES(:nume,:prenume,:email,:password,:salt)";
        $stmt = mysqli_stmt_init($conn);

        $randomsalt=hash('sha512', uniqid(mt_rand(1, mt_getrandmax()), true));
        $hashpsw=hash('sha512',$password.$randomsalt);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            //alta eroare 
            exit();
        }

        $stmt->bind_param(':nume',$nume);
        $stmt->bind_param(':prenume',$prenum,);
        $stmt->bind_param(':email',$email);
        $stmt->bind_param(':password',$hashpsw);
        $stmt->bind_param(':salt',$randomsalt);
        $stmt->execute();
        $stmt->close();
    }

}