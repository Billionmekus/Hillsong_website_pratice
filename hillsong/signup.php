<!DOCTYPE html>
<html>
    <head>
    <title>Hillsong Church | signup</title>
        <link  rel="icon" type= "icon" href="IMG/Hillsong logo.png">
		<meta name="keyword" contents =" in here you write a keyword users are likely to search for">
        <meta name=" description" contents =" here you wite a little about the page">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet"href="NAV.css"type="text/css">
    </head>
    <body>
        <?php include('includes/Nav.php');?>
        <div class="container" style="margin-top:140px;margin-bottom:40px">
            <h1> Create account</h1>

            <form class="form"  method="POST">
                <div class="form-row">
                    <div class="form-group col-6">
                        <input type="text" class="form-control" name="sname" placeholder ="surname">

                    </div>
                    <div class="form-group col-6">
                        <input type="text" class="form-control" name="fname" placeholder ="first name">
                    </div>
                </div><!--closing div for form row-->
                <div class="form-group ">
                        <input type="text" class="form-control" name="unname" placeholder ="Username">

                    </div>

                <div class="form-group">
                    <input type="email" class="form-control" name="ename" placeholder ="Email">
    
                    </div>
                 <div class="form-group">
                    <input type="tel" class="form-control" name="pnum" placeholder ="Phone number" required>
                </div>
                   

            
                <div class="form-group">
                    <span for="dob">Date of birth </span>
                    <input type="date" class="form-control">

                </div>

                <div class="form-group">
                    <input type="password" class="form-control" name="pass1" placeholder="Create a password">

                </div>

                <div class="form-group">
                    <input type="password" class="form-control" name="pass2" placeholder="confirm password">

                </div>
                <button class="btn btn-warning btn-lg btn-block" name="submit">
                    signup
                </button>
                
            </form>


        </div>
        <?php include('includes/footer.php');?>
    </body>
</html>

