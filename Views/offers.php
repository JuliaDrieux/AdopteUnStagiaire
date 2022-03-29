<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
</head>
<body>
    <?php include('header.php');?>
    <h1>offers</h1>
    <div class ="container">
        <?php foreach($offers as $offer){ ?>
            <div class="element"><?= $offer['duration'] ?></div>
            <div class="element"><?= $offer['email'] ?></div>
        <?php } ?>
    </div>
    <?php include('footer.php');?>  
</body>
</html>