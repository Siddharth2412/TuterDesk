<?php
session_start();
if(isset($_SESSION["user"])){
    $id =  $_SESSION["user"];
}   else {
    header('location:login.php');
}
$filename = $_POST['file'];
$target_dir = "uploads/$id/$filename";
unlink($target_dir);
header('location:home.php');
?>