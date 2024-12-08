<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $user_name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    require_once 'connection.inc.php';
    require_once 'functions.inc.php';
    if(userExists($con, $user_name, $email) !== false){
        header("location: ../sign-up.php?error=usernametaken");
        eixt();
    }
    createUser($con,$name, $user_name, $email, $password);
}else{
    header("location: ../sign-up.php");
}