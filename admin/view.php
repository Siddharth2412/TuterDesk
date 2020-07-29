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
            <h2 class='text-center'>View</h2>
            <form method='POST' action='displaysingle.php' class='form-group col-sm-6'>
            <select name="selectname" class='form-control'>
            <?php
                $sql = "SELECT * FROM student";
                $result = mysqli_query($con,$sql);
                while($row = $result->fetch_assoc()) {
                    $name=$row["name"];
                    $id=$row["id"];
                    echo 
                    "<option value='$id'>$name</option>";
                }
            ?>
            </select>
            <br>
            <input type="submit" value="Submit" name="submit" class='btn btn-success'>
            <a href='./display.php' class='btn btn-success'>
            <br>
            </form>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </body>
</html>