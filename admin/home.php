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
        <title>All Data</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link
            href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
            rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script>
            function check(){
                return confirm('Sure you want to delete?');
            }
        </script>
    </head>
    
    <body class='container fluid'>
        <h2 class='text-center'>All Registered Student</h2>
        <form method='post' action='deletemul.php'>
        <table class='table table-bordered'>
            <tr>
                <th class='text-center'><input type='checkbox' id='checkAll'></th>
                <!-- <th class='text-center'>ID</th> -->
                <th class='text-center'>Name</th>
                <th class='text-center'>E-mail</th>
                <th class='text-center'>Class</th>
                <th class='text-center'>Last Marks</th>
                <th class='text-center'>Edit </th>
                <th class='text-center'>Delete</th>
            </tr>
        <?php
            $sql = "SELECT * FROM student";

            $result = mysqli_query($con,$sql);
            while($row = $result->fetch_assoc()) {
                $name=$row["name"];
                $email=$row["email"];
                $class=$row["class"];
                $last_marks=$row["last_marks"];
                $id=$row["id"];
                echo 
                "<tr>
                    <td class='text-center'><input type='checkbox' name='checkb[]' id='checkItem' value='$id'></td>
                    <!--<td class='text-center'>$id</td>-->
                    <td class='text-center'>$name</td>
                    <td class='text-center'>$email</td>
                    <td class='text-center'>$class</td>
                    <td class='text-center'>$last_marks</td>
                    <td class='text-center'><a href='edit.php?id=$id' class='btn btn-info'>Edit</a></td>
                    <td class='text-center'><a href='delete.php?id=$id' onclick='return check();' class='btn btn-danger'>Delete</a></td>
                </tr>";
            }
        ?>
        </table>
        <input type='submit' class='btn btn-danger' name='delete' value='Delete' onclick='return check();'>&nbsp
        <a class='btn btn-success' href='../registration.html'>Click Here to insert</a>
        <a class='btn btn-danger' href='./logout.php' style='float:right;'>Logout</a>
        <!-- <a class='btn btn-default' href='view.php'>Select Data</a> -->
        </form>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>
        $("#checkAll").click(function () {
            $('input:checkbox').not(this).prop('checked', this.checked);
        });
        </script>
    </body>
</html>