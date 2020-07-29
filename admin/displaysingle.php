<?php 
session_start();
if(isset($_SESSION["user"])){
    $id =  $_SESSION["user"];
}   else {
    header('location:index.php');
}
?>
<html>
    <head>
        <title>View</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link
            href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
            rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body class='container-fluid'>
        <div class='table '>
        <?php
            include("view.php");
            $id = $_POST["selectname"];
            $con = mysqli_connect('localhost', 'root', '','registration');
            $sql = "SELECT * FROM student WHERE id = $id";
            // echo $sql;
            $result = mysqli_query($con,$sql);
            $row = $result->fetch_assoc();
                $name=$row["name"];
                $no=$row["number"];
                $email=$row["email"];
                $id=$row["id"];
                echo 
                "Name: $name<br>
                Number: $no<br>
                Email: $email";
            
        ?>
        </div>
    </body>
</html>