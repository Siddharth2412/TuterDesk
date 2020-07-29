<?php 
session_start();
if(isset($_SESSION["user"])){
    $uname =  $_SESSION["user"];
}   else {
    header('location:login.html');
}

$target_dir = "uploads/$uname/";
if(is_dir($target_dir)) {
  echo ("$target_dir is a directory");
}
else{
    mkdir("$target_dir");
}
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.<br>";
    $uploadOk = 0;
}
// Check file size
// Allow certain file formats
// Check if $uploadOk is set to 0 by an error
echo $_FILES["fileToUpload"]["tmp_name"];
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.<br>";
    header('location:home.php?error=1');
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        header('location:home.php');
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

?>