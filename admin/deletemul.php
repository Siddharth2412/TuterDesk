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
    $x = $_POST["checkb"];
    foreach($x as $i){
        echo $i;
        $sql = "DELETE FROM student WHERE id=$i";
        mysqli_query($con, $sql);
    }
    header('location:home.php');
?>