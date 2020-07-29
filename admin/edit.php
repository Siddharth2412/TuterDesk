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
        <title>Edit</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link
            href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
            rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
    <div class="container-fluid bg-dark">
        <div style="text-align: center;">
            <h2>Edit Data</h2>
        </div>
        <div class="form-group col-sm-6" style="left: 25%">
            <?php
                $id=$_GET['id'];
                $con = mysqli_connect('localhost', 'root', '','registration');
                $sql = "SELECT * FROM student WHERE id=$id";
                $result = mysqli_query($con,$sql);
                $row = $result->fetch_assoc();
                $name=$row["name"];
                $email=$row["email"];
                $class=$row["class"];
                $last_marks=$row["last_marks"];
                echo "<form action='update.php?id=$id' method='POST' >
                    Name: <input type='text' name='name' value='$name' class='form-control' placeholder='Enter Name' required>
                    <br>
                    Email: <input type='email' name='email' value='$email' class='form-control' placeholder='Enter Email' required>
                    <br>
                    Number: <input type='text' name='class' value='$class' class='form-control' placeholder='Enter Number' required>
                    <br>
                    Email: <input type='text' name='last_marks' value='$last_marks' class='form-control' placeholder='Enter Email' required>
                    <br>
                    <input type='submit' value='Submit' class='btn btn-primary'>
                </form>";
            ?>
            </div>
        </div>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</html>