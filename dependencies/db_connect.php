<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', '');
define('DATABASE', 'bvolunteer');
 
$conn =new PDO(HOST, USER, PASSWORD, DATABASE);
if(!$conn){
    die(mysqli_connect_error());
}