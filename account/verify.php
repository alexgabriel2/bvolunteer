<?php

require_once 'db_connect.php';

if(isset($_GET['verifykey'])){
    $verkey=mysqli_real_escape_string($conn,trim($_GET['verifykey']));
}
