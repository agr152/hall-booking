<?php
if(isset($_POST['submit'])){
    $dpt = $_POST['department'];
    $hodname = $_POST['hodname'];
    $eventorg = $_POST['eventOrganizer'];
    $eventtitle = $_POST['eventTitle'];

    include_once 'connection.inc.php';
    include_once 'function.inc.php';

    createEvent($con, $dpt, $hodname, $eventorg, $eventtitle);
}else{
    header("location:../date-selection.php");
    exit();
}
?>