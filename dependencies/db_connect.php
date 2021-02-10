<?php

$servername="localhost";
$dbname="bvolunteer";
$username="root";
$password="";

$conn=mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){

    die("Connection failedd:" . mysqli_connect_error());

}