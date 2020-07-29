<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "registration";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $name=$_POST["name"];
    $email=$_POST["email"];
    $class=$_POST["class"];
    $marks=$_POST["marks"];
    $pass=MD5($_POST["pass"]);
    $sql = "INSERT INTO student (name, email, class, last_marks, pass) VALUES ('$name', '$email', '$class', '$marks', '$pass')";
    $conn->query($sql);
    header('location:login.php');
?>