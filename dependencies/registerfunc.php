<?php

function isValidnume($nume) {
    return preg_match("/[^a-zA-Z]+/", $nume);
}
function isValidprenume($prenume) {
    return preg_match("/[^a-zA-Z]+/", $prenume);
}

function register($nume,$prenume,$email,$password,$conn){

    if(isValidnume($nume)==1){
        echo('Numele nu este valid');
    }
    if(isValidprenume($prenume)==1){
        echo('Prenumele nu este valid');
    }
    

}