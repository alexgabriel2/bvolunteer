<?php

$formres=$_POST['formres'];

if($formres==1){
    echo('
    <script>
    $(document).ready(function(){
        $("form").submit(function(event){
            event.preventDefault();
            var nume=$("#nume").val();
            var prenume=$("#prenume").val();
            var email=$("#email").val();
            var password=$("#password").val();
            var confirmpassword=$("#confirmpassword").val();
            var submit=$("#register").val();
            $(".response").load("preregisteruser.php", {
                nume:nume,
                prenume:prenume,
                email:email,
                password:password,
                confirmpassword:confirmpassword,
                submit:submit
            });
        });
    });
    </script>
    <form action="preregisteruser.php" method="post">
        <input type="text" placeholder="Nume" name="nume" id="nume">
        <input type="text" placeholder="Prenume" name="prenume" id="prenume">
        <input type="text" placeholder="Email" name="email" id="email">
        <input type="password" placeholder="Password" name="password" id="password">
        <input type="password" placeholder="Confirm password" name="confirmpassword" id="confirmpassword">
        <input type="submit" value="Register" id="register">
    </form>
    <p class="response"></p> 
    
    ');
}else{
    echo('
    <script>
    $(document).ready(function(){
        $("form").submit(function(event){
            event.preventDefault();
            var nume=$("#nume").val();
            var prenume=$("#prenume").val();
            var email=$("#email").val();
            var password=$("#password").val();
            var confirmpassword=$("#confirmpassword").val();
            var submit=$("#register").val();
            $(".response").load("preregisterorg.php", {
                nume:nume,
                prenume:prenume,
                email:email,
                password:password,
                confirmpassword:confirmpassword,
                submit:submit
            });
        });
    });
    </script>
    <form action="preregisterorg.php" method="post">
        <input type="text" placeholder="Nume" name="nume" id="nume">
        <input type="text" placeholder="Prenume" name="prenume" id="prenume">
        <input type="text" placeholder="Email" name="email" id="email">
        <input type="password" placeholder="Password" name="password" id="password">
        <input type="password" placeholder="Confirm password" name="confirmpassword" id="confirmpassword">
        <input type="submit" value="Register" id="register">
    </form>
    <p class="response"></p> 
    ');
}