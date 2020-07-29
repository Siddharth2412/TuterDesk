<html>
    <head>
        <title>Welcome</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
        <div class="container-fluid">
            <h2 style="text-align: center;">Know Your Limits</h2>
            <h2 style="text-align: center;">Admin Login</h2>
            <br>
            <form method="POST" action="logincheck.php">
            <div class="form-group col-sm-6" style="left: 25%">
                <div>
                    E-mail:
                    <input type="email" name="email" class="form-control" placeholder="Enter your Email id" required>
                </div>
                <br>
                <div>
                    Password:
                    <input type="password" name="password" class="form-control" placeholder="Enter your Password" required>
                </div>
                <br>
                <div>
                    <input type="submit" name="Submit" value="LogIn" class="btn btn-success">
                </div>
            </div>
            </form>
        </div>
    </body>
</html>