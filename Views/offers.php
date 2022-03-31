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
    
    <h1>offers</h1>

    <a href="http://adopteunstagiaire.com/addOffer" target="_self"><button>Add an offer</button></a>

    <div class ="container">
        <?php foreach($offers as $offer){ ?>
            <div class="element"><?= $offer['publicationDate'] ?></div>
            <div class="element"><?= $offer['name'] ?></div>
            <div class="element"><?= $offer['category'] ?></div>
            <div class="element"><?= $offer['duration'] ?></div>
            <div class="element"><?= $offer['availablePositions'] ?></div>
            <div class="element"><?= $offer['salary'] ?></div>
            <div class="element"><?= $offer['email'] ?></div>
        <?php } ?>
    </div>  
    
    <?php include('footer.php');?>
</body>
  
</html>
