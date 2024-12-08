<?php
if(isset($_POST["submit"])){
    $uname = $_POST['username'];
    $pwd = $_POST['password'];

    require_once 'connection.inc.php';
    require_once 'functions.inc.php';

    loginUser($con, $uname, $pwd);
}
else{
    header("location: ../login-page.php");
    exit();
}