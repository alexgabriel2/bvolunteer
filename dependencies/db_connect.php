<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', '');
define('DATABASE', 'bvolunteer');
 
$conn =mysqli_connect(HOST, USER, PASSWORD, DATABASE);
if(!$conn){
    die(mysqli_connect_error());
}