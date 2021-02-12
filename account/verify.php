<?php
require_once '../dependencies/db_connect.php';

if(isset($_GET['verifykey']) && isset($_GET['is'])){

    $verkey=mysqli_real_escape_string($conn,trim($_GET['verifykey']));

    $user=mysqli_real_escape_string($conn,trim($_GET['is']));

    if($user=="volutar"){

        $sqlusers="SELECT verified,regkey FROM users WHERE verified=? AND regkey=?;";
        $stmt=mysqli_stmt_init($conn);
        mysqli_stmt_prepare($stmt,$sqlusers);
        $verified=0;
        mysqli_stmt_bind_param($stmt,"ss", $verified, $verkey);
        mysqli_stmt_execute($stmt);
        $resultuser=mysqli_stmt_get_result($stmt);
        if(mysqli_fetch_assoc($resultuser)){
            $update=$conn->query("UPDATE USERS SET verified = 1 WHERE regkey='$verkey' LIMIT 1");
            if($update){
                echo "Your account has been verified";
                mysqli_stmt_close($stmt);
            }
            else{
                echo"Something went wrong";
            }
        }
        else{
            echo"This account is invalid or is already verified";
        }

    }
    elseif($user=="org"){

        $sqlorg="SELECT verified,regkey FROM org WHERE verified=? AND regkey=?;";
        $stmt=mysqli_stmt_init($conn);
        mysqli_stmt_prepare($stmt,$sqlorg);
        $verified=0;
        mysqli_stmt_bind_param($stmt,"ss", $verified, $verkey);
        mysqli_stmt_execute($stmt);
        $resultorg=mysqli_stmt_get_result($stmt);
        if(mysqli_fetch_assoc($resultorg)){
            $update=$conn->query("UPDATE ORG SET verified = 1 WHERE regkey='$verkey' LIMIT 1");
            if($update){
                echo "Your account has been verified";
                mysqli_stmt_close($stmt);
            }
            else{
                echo"Something went wrong";
            }
        }
        else{
            echo"This account is invalid or is already verified";
        }

    }
    else{
        echo"Something went wrong";
    }
}
