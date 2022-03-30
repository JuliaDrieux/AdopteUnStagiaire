<?php
//Block access from file
if(__FILE__ == $_SERVER['SCRIPT_FILENAME']){
    include_once $_SERVER['DOCUMENT_ROOT'].'/errors/403.html';
    die();
}?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <link rel="stylesheet" href="http://cdn.adopteunstagiaire.com/style.css">
    <link rel="manifest" href="manifest.json">
</head>

<body>
    <?php include('header.php');?> 

    <strong>Mobile App</strong><br><br>

    <a>Access all available intership offers wherever you are thank to our mobile application !</a><br><br>

    <a><strong>The hiring <strike>site</strike> app where students take the power !</strong></a><br><br>

    <button type="Download">Download</button>

    <img src="http://cdn.adopteunstagiaire.com/images/Smartphone.png">

    <?php include('footer.php');?> 
</body>
 
</html>
