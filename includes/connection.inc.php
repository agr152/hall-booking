<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hall_booking";

$con = mysqli_connect($servername, $username, $password, $dbname);

if(!$con){
    die("Failed to Connect:".mysqli_connect_error());
}