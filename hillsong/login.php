<?php

}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> Login | Registration </title>
        <link rel="icon" href="img/logo.jpg">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="login-box">
                <div class="row">
                    <div class="col-md-6 login-left">
                        <h2> Login Here</h2>
                        <form action="validation.php" method="POST">
                            <div class="form-group">
                                <label> Username </label>
                                <input type="text" name="user" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label> Password </label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary"> Log in </button> 
                        </form>
                    </div>

                    <div class="col-md-6 login-right">
                        <h2> Register Here </h2>
                        <form action="login.php" method="post">
                            <div class="form-group">
                                <label> Username </label>
                                <input type="text" name="user" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label> Password </label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <div class=row>
                                <div class="col-md-5">
                                    <button type="submit" class="btn btn-primary"> Register </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>