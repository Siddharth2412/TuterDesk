
<html>
    <head>
        <title>Welcome</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
        <nav class="nav navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">TuterDesk</a>
                </div>
                <ul class="nav navbar-nav" style="float: right">
                    <li><a href="index.html">Home</a></li>
                    <li class="active"><a href="#">Log In</a></li>
                    <li><a href="registration.html">Registration</a></li>
                </ul>
            </div>
        </nav>
        <div class="container-fluid">
            <h2 style="text-align: center;">Login</h2>
            <br>
            <form method="POST" action="logincheck.php">
            <div class="form-group col-sm-6" style="left: 25%">
                <div>
                    E-mail:
                    <input type="email" name="email" class="form-control" placeholder="Enter your valid Email id" required>
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