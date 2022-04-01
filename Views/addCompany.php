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
    
        <strong>Add a company</strong><br><br>

        <form action="/addCompany" method="post">
        <div>
            <input placeholder="Name" id="name" name="company_name">
        </div><br>
        <div>
            <input placeholder="Business sector" id="businessSector" name="company_businessSector">
        </div><br>
        <div>
            <input placeholder="Trainees recruited" type="number" id="traineesRecruited" name="company_traineesRecruited">
        </div><br>
        <?php if(isset($error)) {?>
            <div><?= $error?></div>
        <?php } ?>
        <button type="submit">Create</button>
    
    </form>

        <div><br>
        <label for="rating">Rating (optional)</label><br>
        <input type="radio" id="star5" name="rate" value="5" />
        <label for="star5" title="text">5 stars</label>
        <input type="radio" id="star4" name="rate" value="4" />
        <label for="star4" title="text">4 stars</label>
        <input type="radio" id="star3" name="rate" value="3" />
        <label for="star3" title="text">3 stars</label>
        <input type="radio" id="star2" name="rate" value="2" />
        <label for="star2" title="text">2 stars</label>
        <input type="radio" id="star1" name="rate" value="1" />
        <label for="star1" title="text">1 star</label><br>
                        <input type="text" id="rating_text" name="rating_text">
        </div><br>

        <a href="http://adopteunstagiaire.com" target="_self"><button>Back to home page</button></a>
    
    <?php include('footer.php');?>

</body>
  
</html>