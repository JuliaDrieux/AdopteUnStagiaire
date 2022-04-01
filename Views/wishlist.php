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

    <main id="Omain">
    <div id="main">  
        <h2>My Internships</h2>
        <p>You can see your Internships and your Wishlist here !</p>   
    <div class ="container">
        <?php foreach($wishlist as $wishlist){ ?>
            <div class="element"><?= $wishlist['name'] ?></div>
            <div class="element"><?= $wishlist['category'] ?></div>
            <div class="element"><?= $wishlist['publicationDate'] ?></div>
            <div class="element"><?= $wishlist['duration'] ?></div>
            <div class="element"><?= $wishlist['availablePositions'] ?></div>
            <div class="element"><?= $wishlist['salary'] ?></div>
            <div class="element"><?= $wishlist['email'] ?></div>
        <?php } ?>
    </div>  
    </div>
    </main>
    <?php include('footer.php');?>  
</body>

</html>