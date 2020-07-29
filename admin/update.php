<?php
    $con = mysqli_connect('localhost', 'root', '','registration');
    $name=$_POST["name"];
    $email=$_POST["email"];
    $class=$_POST["class"];
    $last_marks=$_POST["last_marks"];
    $id=$_GET['id'];
    $sql = "UPDATE student SET name='$name', email='$email', class='$class', last_marks='$last_marks' WHERE id=$id";
    mysqli_query($con, $sql);
    header('location:home.php');
?>