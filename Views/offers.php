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
</head>

    <?php include('header.php');?>
<body>
    <h1>offers</h1>
    <div class ="container">
        <?php foreach($offers as $offer){ ?>
            <div class="element"><?= $offer['duration'] ?></div>
            <div class="element"><?= $offer['email'] ?></div>
        <?php } ?>
    </div>   
</body>
    <?php include('footer.php');?>  
</html>
