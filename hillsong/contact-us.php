<?php






// GET,POST,SESSION,
session_start();

if (isset($_POST['submit'])) {
    $full_name = $_POST['fullname'];

    $_SESSION['full-name'] = $full_name;

    $email = $_POST['email'];
    $message = $_POST['message'];
    $file = $_FILES['file_ob'];

    $ext = end(explode('.',$file['name']));;
    

    if (!$file['error']) {
       $temp_location = $file['tmp_name'];

       move_uploaded_file($temp_location,"all_files/$full_name.$ext");

       header('Location: create-file.php');
    }
}
?>

<!DOCTYPE html>
<html>
	<head>
        <title>Hillsong Church | Contact Us</title>
        <link  rel="icon" type= "icon" href="IMG/Hillsong logo.png">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet"href="NAV.css"type="text/css">
	</head>
	<body >
        <?php include('includes/Nav.php');?>
        
        <div class="container" style="margin-top:140px;margin-bottom:40px">
        <?php 
        print_r($file);
        echo $ext;
        
        ?>
            <h1>We love to hear your testimonies and prayer requests</h1> 
            <form class="form" action="contact-us.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="text" class="form-control" name="fullname" placeholder="full name">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="email">
                </div>
                <div class="form-group">
                    <span>Testimony/Prayers</span>
                    <textarea type="text" class="form-control" name="message">
                    </textarea>
                </div>
                <div class="form-group">
                    <input type="file" class="form-control" name="file_ob">
                </div>
                <button type="submit" name="submit" class="btn btn-dark btn-lg btn-block">SEND</button>
            </form>
        </div>

        <?php include('includes/footer.php');?>
	</body>
	<footer>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	</footer>
</html>




