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
    
    <h1>Companies</h1>

    <div class ="container">
        <?php foreach($companies as $company){ ?>
            <div class="element"><?= $company['name'] ?></div>
            <div class="element"><?= $company['businessSector'] ?></div>
            <div class="element"><?= $company['traineesRecruited'] ?></div>
        <?php } ?>
    </div>  
    
    <?php include('footer.php');?>
</body>
  
</html>
