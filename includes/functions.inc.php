<?php

function userExists($con, $user_name, $email){
    $sql = "SELECT * FROM users WHERE username = ? OR email = ?;";
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../sign-up.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $user_name, $email);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($result)){
        return $row;
    }else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($con, $name, $user_name, $email, $password){
    $sql = "INSERT INTO users(name, email, username, password) VALUES(?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../sign-up.php?error=stmtfailed");
        exit();
    }

    $hashedpwd = password_hash($password, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $user_name, $hashedpwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../sign-up.php?error=none");

}

function createEvent($con, $dpt, $hodname, $eventorg, $eventtitle){
    include_once 'connection.inc.php';
    $sql = "INSERT INTO events_info(dept, hod_name, event_org, event_title) VALUES(?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../date-selection.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ssss", $dpt, $hodname, $eventorg, $eventtitle);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../date-selection.php?error=none");

}

//function for login page
include_once 'connection.inc.php';
function loginUser($con, $uname, $pwd){
    $unameExists = userExists($con, $uname, $uname);

    if($unameExists === false){
        header("location: ../login-page.php?error=wronglogin");
        exit();
    }

    $hashedpassword = $unameExists["password"];
    $checkpwd = password_verify($pwd, $hashedpassword);

    if($checkpwd === true){
        header("location: ../login-page.php?error=wronglogin");
        exit();
    }else if($checkpwd === false){
        session_start();
        $_SESSION["userid"] = $unameExists["user_id"];
        $_SESSION["userName"] = $unameExists["username"];
        header("location: ../index.php");
        exit();
    }
}