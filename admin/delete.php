<?php 
session_start();
if(isset($_SESSION["user"])){
    $id =  $_SESSION["user"];
}   else {
    header('location:index.php');
}
?>
<?php
    $con = mysqli_connect('localhost', 'root', '','registration');
    $id=$_GET['id'];
    $sql = "DELETE FROM student WHERE id=$id";
    mysqli_query($con, $sql);
    header('location:home.php');
?>