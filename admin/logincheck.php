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
$name=$_POST["email"];
$pass=MD5($_POST["password"]);
echo $name;
echo $pass;
$sql = "SELECT * FROM admin";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
    $dname = $row["email"];
    $dpass = $row["pass"];
    $id = $row["id"];
    if($dname==$name && $dpass==$pass){
        session_start();
            $_SESSION["user"] = $id;
            $_SESSION["username"] = $dname;
        header('location:home.php');
        $flag=1;
    }
}
if($flag!==1){
    header('location:index.php');
}
$conn->close();
?>