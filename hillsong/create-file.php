<?php

$content = "<!DOCTYPE html>
<html>
	<head>
        <title>Hillsong Church | Contact Us</title>
        <link  rel=\"icon\" type= \"icon\" href=\"IMG/Hillsong logo.png\">
        <link rel=\"\stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css\" integrity=\"sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\"href=\"NAV.css\" type=\"text/css\">
	</head>
	<body >
        <h1>This file was just created automatically!!</h1>
    </body>
</html>";



session_start();
$filename = $_SESSION['full-name'];

$new_file = fopen("$filename.php",'w');
fwrite($new_file,$content);
fclose($new_file);

header("Location: $filename.php");






?>