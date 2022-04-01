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

    <strong>Directory</strong><br><br>

    <div>
        <input type="text" id="research_person" name="research_person">
        <button type="search">Search</button><br><br>
    </div><br>

    <div>
    <a href="http://adopteunstagiaire.com/" target="_self"><button>Back to home page</button></a>
    </div>

    <?php include('footer.php');?> 
</body>
 
</html>