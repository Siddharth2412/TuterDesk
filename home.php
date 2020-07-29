<?php 
session_start();
if(isset($_SESSION["user"])){
    $id =  $_SESSION["user"];
    $name = $_SESSION["username"];
}   else {
    header('location:login.php');
}
?>
<html>
    <head>
        <title>Welcome</title>
        <link
            href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
            rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body class='container-fluid' style="padding: 0px 0px;">
    <script>
        function check(){
            return confirm('Are You sure You Want to Delete?');
        }
    </script>
    <header>
    <nav class="nav navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">TuterDesk</a>
            </div>
            <ul class="nav navbar-nav" style="float: right">
                <li><a><?php echo $name ?></a></li>
                <li><a href="logout.php">logout</a></li>
            </ul>
        </div>
    </nav>
    </header>
    <div>
    <div class="col-sm-8" style="left: 16.66%">
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <br>
            <label style="font-size:20px;">Select image to upload:</label>
            <br>
            <input type="file" name="fileToUpload" id="fileToUpload" class="btn btn-default">
            <label style="color:red;"><?php if(isset($_GET['error'])){
                if($_GET['error']==1){
                    echo "You have already uploaded This file.";
                }
            } ?></label>
            <br>
            <input type="submit" value="Upload Image" name="submit" class="btn btn-success">
        </form>
        <br>
        <div>
        <table class='table table-bordered' style="text-align: center;">
            <tr>
                <td style="font-weight: bold; font-size:18px;">File Name</td>
                <td style="font-weight: bold; font-size:18px;">Delete</td>
            </tr>
            <?php
                $target_dir = "uploads/".$id."/";
                if (is_dir($target_dir)){
                    if ($dh = opendir($target_dir)){
                      while (($file = readdir($dh)) !== false){
                          if($file!== '.' && $file!== '..'){
                        echo "<tr>";
                
                        echo '<td>'.$file.'</td>';
                            echo "<form action='delete.php' method='POST'>";
                        echo "<td><input type='hidden' name='file' value='$file'><input type='submit' class='btn btn-danger' value='Delete' onclick='return check();'></td>";
                            echo "</form>";
                        echo "</tr>";
                      }}
                      closedir($dh);
                    }
                }
            ?>
        </table>
        </div>
    </div>
            </div>
    </body>
</html>